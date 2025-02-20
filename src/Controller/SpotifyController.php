<?php
// src/Controller/SpotifyController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\SpotifyAuth;
use Symfony\Bundle\SecurityBundle\Security;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormFactoryInterface;
use App\Entity\Cart;
use App\Form\CartType;

class SpotifyController extends AbstractController
{
    private HttpClientInterface $client;
    private SpotifyAuth $spotifyAuth;
    private Security $security;
    private EntityManagerInterface $entityManager;

    public function __construct(HttpClientInterface $client, SpotifyAuth $spotifyAuth, Security $security, EntityManagerInterface $entityManager)
    {
        $this->client = $client;
        $this->spotifyAuth = $spotifyAuth; // Injecting the SpotifyAuth service
        $this->security = $security;
        $this->entityManager = $entityManager;
    }

    #[Route("/spotify", name: "spotify")]
    public function index(): Response
    {
        $clientId = $_ENV['SPOTIFY_CLIENT_ID'];
        $redirectUri = $_ENV['SPOTIFY_REDIRECT_URI'];
        $scope = 'user-library-read';
    
        $authUrl = "https://accounts.spotify.com/authorize?response_type=code&client_id=$clientId&redirect_uri=" . urlencode($redirectUri) . "&scope=" . urlencode($scope);
    
        return $this->redirect($authUrl);
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
    
    #[Route("/home", name: "spotify_home")]
    public function home(Request $request): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->security->getUser();

        if (!$user) {
            return $this->redirectToRoute('login');
        }

        $accessToken = $user->getAccessTokenDb();
        $refreshToken = $user->getRefreshToken();

        if (!$refreshToken) {
            return $this->redirectToRoute('spotify');
        }

        $this->spotifyAuth->getValidAccessToken($accessToken, $refreshToken);
        $accessToken = $user->getAccessTokenDb();
    
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
            // Si une erreur survient, on redirige l'utilisateur vers la page de connexion
            return $this->redirectToRoute('spotify');
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

    #[Route("/spotify/search", name: "spotify_search")]
    public function search(Request $request): Response
    {
        $user = $this->security->getUser();
    
        if (!$user) {
            return $this->redirectToRoute('login');
        }
    
        $accessToken = $user->getAccessTokenDb();
        $refreshToken = $user->getRefreshToken();
    
        if (!$refreshToken) {
            return $this->redirectToRoute('spotify');
        }
    
        // Vérifie si le token est encore valide, sinon le rafraîchir
        $this->spotifyAuth->getValidAccessToken($accessToken, $refreshToken);
        $accessToken = $user->getAccessTokenDb(); // Récupérer le token mis à jour
    
        if (!$accessToken) {
            return $this->redirectToRoute('spotify');
        }
    
        // 🔹 Récupération de la requête utilisateur
        $query = trim($request->query->get('q')); // ✅ Correction ici
    
        // ✅ Vérifier si la requête est valide
        if (!$query || strlen($query) < 2) {
            return $this->json(['error' => 'Invalid request: Query too short'], Response::HTTP_BAD_REQUEST);
        }
    
        try {
            // 🔹 Effectuer la requête à Spotify
            $response = $this->client->request('GET', 'https://api.spotify.com/v1/search', [
                'headers' => ['Authorization' => 'Bearer ' . $accessToken],
                'query' => [
                    'q' => $query,
                    'type' => 'album',
                    'limit' => 5
                ]
            ]);
    
            // 🔎 Vérifier le statut HTTP
            if ($response->getStatusCode() !== 200) {
                return $this->json([
                    'error' => 'Spotify API error',
                    'status' => $response->getStatusCode(),
                    'message' => $response->getContent(false) // Récupère le message brut de Spotify
                ], Response::HTTP_BAD_REQUEST);
            }
    
            $data = $response->toArray();
            $albums = [];
    
            // 🔹 Vérifier si des albums existent
            if (!isset($data['albums']['items']) || empty($data['albums']['items'])) {
                return $this->json(['error' => 'No albums found'], Response::HTTP_NOT_FOUND);
            }
    
            // 🖼️ Formater les résultats
            foreach ($data['albums']['items'] as $album) {
                $albums[] = [
                    'title' => $album['name'],
                    'artist' => $album['artists'][0]['name'],
                    'image' => $album['images'][0]['url'] ?? 'default.jpg',
                    'url' => $album['external_urls']['spotify']
                ];
            }
    
            return $this->json(['albums' => $albums]);
        } catch (\Exception $e) {
            return $this->json([
                'error' => 'API error',
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    

    #[Route("/spotify/recommendations", name: "spotify_recommendations")]
    public function recommendations(Request $request): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->security->getUser();

        if (!$user) {
            return $this->redirectToRoute('login');
        }

        $accessToken = $user->getAccessTokenDb();
        $refreshToken = $user->getRefreshToken();

        if (!$refreshToken) {
            return $this->redirectToRoute('spotify');
        }

        $this->spotifyAuth->getValidAccessToken($accessToken, $refreshToken);
        $accessToken = $user->getAccessTokenDb();
    
        if (!$accessToken) {
            return $this->redirectToRoute('spotify');
        }
    
        try {
            // 🔹 Récupération des artistes préférés de l'utilisateur
            $response = $this->client->request('GET', 'https://api.spotify.com/v1/me/top/artists', [
                'headers' => ['Authorization' => 'Bearer ' . $accessToken],
                'query' => ['limit' => 5]
            ]);
    
            $data = $response->toArray();
            $topArtists = array_column($data['items'], 'id');
    
            if (empty($topArtists)) {
                return $this->json(['error' => 'No top artists found'], Response::HTTP_NO_CONTENT);
            }
    
            // 🔹 Récupération des recommandations
            $seedArtists = implode(',', $topArtists);
            $recommendationsResponse = $this->client->request('GET', 'https://api.spotify.com/v1/recommendations', [
                'headers' => ['Authorization' => 'Bearer ' . $accessToken],
                'query' => [
                    'seed_artists' => $seedArtists,
                    'limit' => 6
                ]
            ]);
    
            $recommendationsData = $recommendationsResponse->toArray();
            $recommendedArtists = [];
    
            foreach ($recommendationsData['tracks'] as $track) {
                $artist = $track['artists'][0];
                $recommendedArtists[$artist['id']] = [
                    'name' => $artist['name'],
                    'image' => $artist['images'][0]['url'] ?? '',
                    'url' => $artist['external_urls']['spotify']
                ];
            }
    
            return $this->json(['artists' => array_values($recommendedArtists)]);
        } catch (\Exception $e) {
            return $this->json(['error' => 'API error: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route("/myalbums", name: "spotify_albums")]
    public function getAlbums(Request $request): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->security->getUser();

        if (!$user) {
            return $this->redirectToRoute('login');
        }

        $accessToken = $user->getAccessTokenDb();
        $refreshToken = $user->getRefreshToken();

        if (!$refreshToken) {
            return $this->redirectToRoute('spotify');
        }

        $this->spotifyAuth->getValidAccessToken($accessToken, $refreshToken);
        $accessToken = $user->getAccessTokenDb();
    
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



    #[Route("/spotify/genre/{genre}", name: "spotify_genre")]
public function genrePage(Request $request, string $genre): Response
{
    // Récupérer l'utilisateur connecté
    $user = $this->security->getUser();

    if (!$user) {
        return $this->redirectToRoute('login');
    }

    $accessToken = $user->getAccessTokenDb();
    $refreshToken = $user->getRefreshToken();

    if (!$refreshToken) {
        return $this->redirectToRoute('spotify');
    }

    $this->spotifyAuth->getValidAccessToken($accessToken, $refreshToken);
    $accessToken = $user->getAccessTokenDb();

    if (!$accessToken) {
        return $this->redirectToRoute('spotify');
    }

    $recommendedAlbums = [];

    try {
        // 🔹 Étape 1 : Récupérer les artistes préférés de l'utilisateur
        $topArtistsResponse = $this->client->request('GET', 'https://api.spotify.com/v1/me/top/artists', [
            'headers' => ['Authorization' => 'Bearer ' . $accessToken],
            'query' => ['limit' => 5] // Prendre les 5 artistes les plus écoutés
        ]);

        $topArtistsData = $topArtistsResponse->toArray();
        $topArtists = array_column($topArtistsData['items'], 'id');

        if (!empty($topArtists)) {
            // 🔹 Étape 2 : Obtenir des recommandations basées sur ces artistes et le genre choisi
            $seedArtists = implode(',', $topArtists);

            $recommendationsResponse = $this->client->request('GET', 'https://api.spotify.com/v1/recommendations', [
                'headers' => ['Authorization' => 'Bearer ' . $accessToken],
                'query' => [
                    'seed_artists' => $seedArtists,
                    'seed_genres' => $genre,
                    'limit' => 10
                ]
            ]);

            $recommendationsData = $recommendationsResponse->toArray();

            foreach ($recommendationsData['tracks'] as $track) {
                $album = $track['album'];
                $recommendedAlbums[$album['id']] = [
                    'title' => $album['name'],
                    'artist' => $album['artists'][0]['name'],
                    'image' => $album['images'][0]['url'] ?? '',
                    'url' => $album['external_urls']['spotify']
                ];
            }
        }
    } catch (\Exception $e) {
        // Gestion d'erreur si l'API ne répond pas
    }
    
    return $this->render('spotify/home.html.twig', [
        'albums' => $albums ?? [], // S'assure que albums est toujours défini
        'recommendedAlbums' => $recommendedAlbums ?? [], // S'assure que recommendedAlbums est toujours défini
    ]);
    
}

#[Route("/album/{id}", name: "spotify_album_details")]
public function albumDetails(Request $request, string $id, FormFactoryInterface $formFactory): Response
{
    $user = $this->security->getUser();

    if (!$user) {
        return $this->redirectToRoute('login');
    }

    $accessToken = $user->getAccessTokenDb();
    $refreshToken = $user->getRefreshToken();

    if (!$refreshToken) {
        return $this->redirectToRoute('spotify');
    }

    $this->spotifyAuth->getValidAccessToken($accessToken, $refreshToken);
    $accessToken = $user->getAccessTokenDb();

    if (!$accessToken) {
        return $this->redirectToRoute('spotify');
    }

    try {
        // 🔹 Récupération des détails de l'album
        $albumResponse = $this->client->request('GET', "https://api.spotify.com/v1/albums/{$id}", [
            'headers' => ['Authorization' => 'Bearer ' . $accessToken],
        ]);

        $album = $albumResponse->toArray();

        // 🔹 Récupération des autres albums du même artiste
        $artistId = $album['artists'][0]['id'];
        $artistAlbumsResponse = $this->client->request('GET', "https://api.spotify.com/v1/artists/{$artistId}/albums", [
            'headers' => ['Authorization' => 'Bearer ' . $accessToken],
            'query' => ['include_groups' => 'album', 'limit' => 6]
        ]);

        $artistAlbums = $artistAlbumsResponse->toArray()['items'];

    } catch (\Exception $e) {
        return $this->render('spotify/error.html.twig', [
            'message' => 'Impossible de charger les informations de l’album.'
        ]);
    }

    // 🔹 Création du formulaire pour le CD
    $form_cd = $formFactory->createBuilder()
        ->add('albumId', HiddenType::class, ['data' => $id])
        ->add('type', HiddenType::class, ['data' => 'cd'])
        ->add('quantity', IntegerType::class, [
            'data' => 1,
            'attr' => ['min' => 1]
        ])
        ->getForm();

    // 🔹 Création du formulaire pour le Vinyle
    $form_vinyle = $formFactory->createBuilder()
        ->add('albumId', HiddenType::class, ['data' => $id])
        ->add('type', HiddenType::class, ['data' => 'vinyle'])
        ->add('quantity', IntegerType::class, [
            'data' => 1,
            'attr' => ['min' => 1]
        ])
        ->getForm();

    return $this->render('spotify/album.html.twig', [
        'album' => $album,
        'artistAlbums' => $artistAlbums,
        'form_cd' => $form_cd->createView(),
        'form_vinyle' => $form_vinyle->createView(),
    ]);
}

}
