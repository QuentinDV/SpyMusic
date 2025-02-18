<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\DependencyInjection\Attribute\AsService;

#[AsService]
class SpotifyAuth
{
    private HttpClientInterface $client;
    private string $apiUrl = 'https://api.spotify.com/v1';

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getAccessToken(): string
    {
        $response = $this->client->request('POST', 'https://accounts.spotify.com/api/token', [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($_ENV['SPOTIFY_CLIENT_ID'] . ':' . $_ENV['SPOTIFY_CLIENT_SECRET']),
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'body' => [
                'grant_type' => 'client_credentials',
            ],
        ]);

        $data = $response->toArray();

        return $data['access_token'];
    }
}
?>