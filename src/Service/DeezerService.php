<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\DependencyInjection\Attribute\AsService;

#[AsService]
class DeezerService
{
    private HttpClientInterface $client;
    private string $apiUrl = 'https://api.deezer.com';

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

 
    public function getAlbumsByArtist(int $artistId): array
    {
        try {
            $response = $this->client->request('GET', "{$this->apiUrl}/artist/{$artistId}/albums");
            $data = $response->toArray();

            $albums = [];

            foreach ($data['data'] as $album) {
                $albums[] = [
                    'id' => $album['id'],
                    'title' => $album['title'],
                    'cover' => $album['cover_big'],
                ];
            }

            return $albums;
        } catch (\Exception $e) {
            return [];
        }
    }
}
