<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\DependencyInjection\Attribute\AsService;
use Symfony\Bundle\SecurityBundle\Security;
use Doctrine\ORM\EntityManagerInterface;

#[AsService]
class SpotifyAuth
{
    private HttpClientInterface $client;
    private Security $security;
    private EntityManagerInterface $entityManager;
    

    public function __construct(HttpClientInterface $client, Security $security, EntityManagerInterface $entityManager)
    {
        $this->client = $client;
        $this->security = $security;
        $this->entityManager = $entityManager;

    }

    public function getAccessToken(string $code): void
    {
        $clientId = $_ENV['SPOTIFY_CLIENT_ID'];
        $clientSecret = $_ENV['SPOTIFY_CLIENT_SECRET'];
        $redirectUri = $_ENV['SPOTIFY_REDIRECT_URI'];

        $response = $this->client->request('POST', 'https://accounts.spotify.com/api/token', [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode("$clientId:$clientSecret"),
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'body' => [
                'grant_type' => 'authorization_code',
                'code' => $code,
                'redirect_uri' => $redirectUri,
            ],
        ]);

        $data = $response->toArray();

        if (isset($data['error'])) {
            throw new \Exception('Erreur API Spotify : ' . $data['error_description']);
        }

        // Récupérer l'utilisateur connecté
        $user = $this->security->getUser();

        // Mettre à jour les tokens
        $user->setAccessTokenDb($data['access_token']);
        $user->setRefreshToken($data['refresh_token']);

        // Sauvegarder dans la base de données
        $this->entityManager->persist($user);
        $this->entityManager->flush();
        
    }

    

    public function getValidAccessToken(string $accessToken, ?string $refreshToken): string
    {
        // Vérifier si l'access token fonctionne
        $response = $this->client->request('GET', 'https://api.spotify.com/v1/me', [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
            ],
        ]);

        if ($response->getStatusCode() === 401 && $refreshToken) { 
            // Token expiré, on le rafraîchit
            return $this->refreshAccessToken($refreshToken);
        }

        // Le token est valide, on le retourne
        return $accessToken;
    }

    public function refreshAccessToken(string $refreshToken): string
    {
        $clientId = $_ENV['SPOTIFY_CLIENT_ID'];
        $clientSecret = $_ENV['SPOTIFY_CLIENT_SECRET'];

        $response = $this->client->request('POST', 'https://accounts.spotify.com/api/token', [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode("$clientId:$clientSecret"),
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'body' => [
                'grant_type' => 'refresh_token',
                'refresh_token' => $refreshToken,
            ],
        ]);

        $data = $response->toArray();

        if (isset($data['error'])) {
            throw new \Exception('Erreur API Spotify : ' . $data['error_description']);
        }

        return $data['access_token'];
    }
}
