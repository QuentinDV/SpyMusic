<?php

namespace App\Controller;

use App\Service\DeezerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeezerController extends AbstractController
{
    #[Route('/deezer/artist/{artistId}', name: 'deezer_artist_albums')]
    public function showArtistAlbums(int $artistId, DeezerService $deezerService): Response
    {
        $albums = $deezerService->getAlbumsByArtist($artistId);

        return $this->render('deezer/albums.html.twig', [
            'albums' => $albums,
            'error' => empty($albums) ? 'Aucun album trouvé pour cet artiste.' : null
        ]);
    }
}
