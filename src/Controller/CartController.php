<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Cart;
use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;

class CartController extends AbstractController
{
    #[Route('/cart/add', name: 'cart_add', methods: ['POST'])]
    public function addToCart(Request $request, EntityManagerInterface $em): Response
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
            
                $cartItem = new Cart();
                $cartItem->setUser($user);
                $cartItem->setAlbumId($data['albumId']);
                $cartItem->setType($type); // Utilisation de la valeur de 'type'
                $cartItem->setQuantity($data['quantity']);
                $cartItem->setAddedAt(new \DateTime());
            
                $em->persist($cartItem);
                $em->flush();
            
                $this->addFlash('success', 'Ajouté au panier avec succès !');
                return $this->redirectToRoute('spotify_album_details', ['id' => $data['albumId']]);
            }
            

        return $this->redirectToRoute('spotify_album_details', ['id' => $request->get('albumId')]);
    }
}
