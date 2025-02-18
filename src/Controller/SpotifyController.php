<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class SpotifyController extends AbstractController
{
    #[Route("/spotify", name: "spotify")]
    public function index(): Response
    {
        $clientId = $_ENV['SPOTIFY_CLIENT_ID'];
        $redirectUri = $_ENV['SPOTIFY_REDIRECT_URI'];
        $scope = 'user-read-private user-read-email';

        $authUrl = "https://accounts.spotify.com/authorize?response_type=code&client_id=$clientId&redirect_uri=" . urlencode($redirectUri) . "&scope=" . urlencode($scope);

        $contents = $this->renderView('spotify/index.html.twig', [
            'authUrl' => $authUrl
        ]);

        return new Response($contents);
    }
}


?>