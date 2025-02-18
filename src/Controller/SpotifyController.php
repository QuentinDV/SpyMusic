<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class SpotifyController extends AbstractController
{
    private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    #[Route("/spotify", name: "spotify")]
    public function index(): Response
    {
        $clientId = $_ENV['SPOTIFY_CLIENT_ID'];
        $redirectUri = $_ENV['SPOTIFY_REDIRECT_URI'];
        $scope = 'user-library-read'; // Permet de lire les albums sauvegardés par l'utilisateur

        $authUrl = "https://accounts.spotify.com/authorize?response_type=code&client_id=$clientId&redirect_uri=" . urlencode($redirectUri) . "&scope=" . urlencode($scope);

        $contents = $this->renderView('spotify/index.html.twig', [
            'authUrl' => $authUrl
        ]);

        return new Response($contents);
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

        // Échange du code contre un token d'accès
        $response = $this->client->request('POST', 'https://accounts.spotify.com/api/token', [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode("$clientId:$clientSecret"),
                'Content-Type' => 'application/x-www-form-urlencoded'
            ],
            'body' => [
                'grant_type' => 'authorization_code',
                'code' => $code,
                'redirect_uri' => $redirectUri
            ]
        ]);

        $data = $response->toArray();
        $accessToken = $data['access_token'];

        $session = $request->getSession();
        $session->set('spotify_access_token', $accessToken);

        return $this->redirectToRoute('spotify_albums');
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

        $contents = $this->renderView('spotify/albums.html.twig', [
            'albums' => $albums
        ]);

        return new Response($contents);
    }
}

?>
