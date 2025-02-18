<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\SpotifyAuth;

class SpotifyController extends AbstractController
{
    private SpotifyAuth $spotifyAuth;

    public function __construct(SpotifyAuth $spotifyAuth)
    {
        $this->spotifyAuth = $spotifyAuth;
    }

    #[Route("/spotify", name: "spotify")]
    public function index(): Response
    {
        $clientId = $_ENV['SPOTIFY_CLIENT_ID'];
        $redirectUri = $_ENV['SPOTIFY_REDIRECT_URI'];
        $scope = 'user-read-private user-read-email';

        $authUrl = "https://accounts.spotify.com/authorize?response_type=code&client_id=$clientId&redirect_uri=" . urlencode($redirectUri) . "&scope=" . urlencode($scope);

        return $this->render('spotify/index.html.twig', [
            'authUrl' => $authUrl
        ]);
    }

    #[Route("/spotify/callback", name: "spotify_callback")]
    public function callback(Request $request): Response
    {
        $code = $request->query->get('code');

        if (!$code) {
            return new Response('Code d\'autorisation manquant', Response::HTTP_BAD_REQUEST);
        }

        // Récupération du token via le service
        $tokens = $this->spotifyAuth->getAccessToken($code);
        
        // Stockage des tokens dans la session (à adapter selon ta gestion des utilisateurs)
        $session = $request->getSession();
        $session->set('access_token', $tokens['access_token']);
        if ($tokens['refresh_token']) {
            $session->set('refresh_token', $tokens['refresh_token']);
        }

        return new Response("Authentification réussie ! Token enregistré.");
    }

    #[Route("/spotify/profile", name: "spotify_profile")]
    public function profile(Request $request): Response
    {
        $session = $request->getSession();
        $accessToken = $session->get('access_token');
        $refreshToken = $session->get('refresh_token');

        if (!$accessToken) {
            return new Response('Utilisateur non authentifié', Response::HTTP_UNAUTHORIZED);
        }

        // Vérification et mise à jour du token si nécessaire
        $accessToken = $this->spotifyAuth->getValidAccessToken($accessToken, $refreshToken);
        $session->set('access_token', $accessToken);

        // Requête API Spotify pour récupérer le profil utilisateur
        $response = $this->spotifyAuth->client->request('GET', 'https://api.spotify.com/v1/me', [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
            ],
        ]);

        $data = $response->toArray();

        return $this->json($data);
    }
}
