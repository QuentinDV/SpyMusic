<?php
// src/Controller/ShoppingCartController.php
namespace App\Controller;

use App\Entity\Cart; // Assure-toi d'importer ton entité Cart
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class ShoppingCartController extends AbstractController
{
    private $entityManager;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->security = $security;
    }

   
    #[Route('/cart', name: 'app_shopping_cart')]
    public function index(): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->security->getUser();

        if (!$user) {
            return $this->redirectToRoute('login');
        }

        // Récupérer les éléments du panier de l'utilisateur
        $cartItems = $this->entityManager->getRepository(Cart::class)
                                         ->findBy(['user' => $user]);

        return $this->render('shopping_cart/index.html.twig', [
            'cartItems' => $cartItems,
        ]);
    }
}
