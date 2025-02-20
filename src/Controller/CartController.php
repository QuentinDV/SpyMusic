<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Service\SpotifyAuth;
use App\Entity\Cart;
use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class CartController extends AbstractController
{
    
    private SpotifyAuth $spotifyAuth;

    public function __construct(SpotifyAuth $spotifyAuth)
    {
        $this->spotifyAuth = $spotifyAuth;
    }


    #[Route('/cart/add', name: 'cart_add', methods: ['POST'])]
    public function addToCart(Request $request, EntityManagerInterface $em, HttpClientInterface $httpClient): Response
    {
        $user = $this->getUser(); // Assure-toi que l'utilisateur est connecté
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour ajouter au panier.');
            return $this->redirectToRoute('app_login');
        }

        $form = $this->createFormBuilder()
            ->add('albumId', HiddenType::class)
            ->add('type', HiddenType::class, [
                'data' => 'cd', // Par défaut, mettre 'cd' (ou une valeur que tu veux)
            ])
            ->add('quantity', IntegerType::class, [
                'data' => 1,
                'attr' => ['min' => 1]
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            
            // Assurer que 'type' est défini
            $type = $data['type'] ?? 'cd'; // Valeur par défaut si 'type' est null
            
            // Récupérer l'albumId et faire une requête à Spotify pour récupérer les infos de l'album
            $albumId = $data['albumId'];
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

            // Faire la requête à l'API Spotify
            $response = $httpClient->request('GET', 'https://api.spotify.com/v1/albums/' . $albumId, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
                ],
            ]);

            $albumData = $response->toArray();

            if (!$albumData) {
                $this->addFlash('error', 'Impossible de récupérer les informations de l\'album.');
                return $this->redirectToRoute('spotify_album_details', ['id' => $albumId]);
            }

            // Traitement des données reçues de Spotify
            $albumName = $albumData['name'];
            $albumImage = $albumData['images'][0]['url']; // Par exemple, la première image de l'album
            $artistName = $albumData['artists'][0]['name']; // Par exemple, le premier artiste de l'album

            // Créer l'élément du panier
            $cartItem = new Cart();
            $cartItem->setUser($user);
            $cartItem->setAlbumId($albumId);
            $cartItem->setType($type);
            $cartItem->setQuantity($data['quantity']);
            $cartItem->setAddedAt(new \DateTime());
            $cartItem->setAlbumTitle($albumName);
            $cartItem->setAlbumImage($albumImage); // Ajouter l'image de l'album
            $cartItem->setArtistName($artistName); // Ajouter le nom de l'artiste
            if ($type === 'CD') {
                $cartItem->setTotalPrice($data['quantity'] * 15); // Par exemple, 10€ par album
            } else {
                $cartItem->setTotalPrice($data['quantity'] * 30); // Par exemple, 5€ par album en digital
            }

            $em->persist($cartItem);
            $em->flush();

            $this->addFlash('success', 'Ajouté au panier avec succès !');
            return $this->redirectToRoute('spotify_album_details', ['id' => $albumId]);
        }

        return $this->redirectToRoute('spotify_album_details', ['id' => $request->get('albumId')]);
    }
}
