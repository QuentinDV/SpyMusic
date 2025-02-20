<?php
// src/Controller/SpotifyController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\SpotifyAuth;

class SpotifyController extends AbstractController
{
    private HttpClientInterface $client;
    private SpotifyAuth $spotifyAuth;

    public function __construct(HttpClientInterface $client, SpotifyAuth $spotifyAuth)
    {
        $this->client = $client;
        $this->spotifyAuth = $spotifyAuth; // Injecting the SpotifyAuth service
    }

    #[Route("/spotify", name: "spotify")]
    public function index(): Response
    {
        $clientId = $_ENV['SPOTIFY_CLIENT_ID'];
        $redirectUri = $_ENV['SPOTIFY_REDIRECT_URI'];
        $scope = 'user-library-read'; // Permet de lire les albums sauvegardés par l'utilisateur

        $authUrl = "https://accounts.spotify.com/authorize?response_type=code&client_id=$clientId&redirect_uri=" . urlencode($redirectUri) . "&scope=" . urlencode($scope);

        return $this->render('spotify/index.html.twig', [
            'authUrl' => $authUrl
        ]);
    }

    #[Route("/spotify/callback", name: "spotify_callback")]
    public function callback(Request $request): Response
    {
        $code = $request->query->get('code');
        $clientId = $_ENV['SPOTIFY_CLIENT_ID'];
        $clientSecret = $_ENV['SPOTIFY_CLIENT_SECRET'];
        $redirectUri = $_ENV['SPOTIFY_REDIRECT_URI'];
    
        if (!$code) {
            return new Response("Erreur: Aucun code reçu", Response::HTTP_BAD_REQUEST);
        }
    
        $tokens = $this->spotifyAuth->getAccessToken($code);
    
        // 🔹 Redirection vers la page "/spotify/home"
        return $this->redirectToRoute('spotify_home');
    }
    
    #[Route("/spotify/home", name: "spotify_home")]
    public function home(Request $request): Response
    {
        $session = $request->getSession();
        $accessToken = $session->get('spotify_access_token');
    
        if (!$accessToken) {
            return $this->redirectToRoute('spotify');
        }
    
        // Récupération des albums sauvegardés par l'utilisateur
        $albums = [];
        try {
            $response = $this->client->request('GET', 'https://api.spotify.com/v1/me/albums', [
                'headers' => ['Authorization' => 'Bearer ' . $accessToken],
            ]);
            $albums = $response->toArray()['items'];
        } catch (\Exception $e) {
            // Gestion d'erreur si l'API ne répond pas
        }
    
        // Données factices pour les recommandations
        $recommendations = [
            ['title' => 'Blinding Lights', 'artist' => 'The Weeknd', 'image' => 'https://via.placeholder.com/150'],
            ['title' => 'Sicko Mode', 'artist' => 'Travis Scott', 'image' => 'https://via.placeholder.com/150'],
            ['title' => 'Levitating', 'artist' => 'Dua Lipa', 'image' => 'https://via.placeholder.com/150'],
            ['title' => 'Good 4 U', 'artist' => 'Olivia Rodrigo', 'image' => 'https://via.placeholder.com/150'],
            ['title' => 'Stay', 'artist' => 'Justin Bieber', 'image' => 'https://via.placeholder.com/150'],
            ['title' => 'Shivers', 'artist' => 'Ed Sheeran', 'image' => 'https://via.placeholder.com/150'],
        ];
    
        return $this->render('spotify/home.html.twig', [
            'albums' => $albums,
            'recommendations' => $recommendations
        ]);
    }

    #[Route("/spotify/albums", name: "spotify_albums")]
    public function getAlbums(Request $request): Response
    {
        $session = $request->getSession();
        $accessToken = $session->get('spotify_access_token');

        if (!$accessToken) {
            return $this->redirectToRoute('spotify');
        }

        // Récupération des albums sauvegardés par l'utilisateur
        $response = $this->client->request('GET', 'https://api.spotify.com/v1/me/albums', [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken
            ]
        ]);

        $albums = $response->toArray()['items'];

        return $this->render('spotify/albums.html.twig', [
            'albums' => $albums
        ]);
    }
}
