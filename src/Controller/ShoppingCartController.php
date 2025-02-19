<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ShoppingCartController extends AbstractController
{
    #[Route('/cart', name: 'app_shopping_cart')]
    public function index(): Response
    {
        return $this->render('shopping_cart/index.html.twig', [
            'controller_name' => 'ShoppingCartController',
        ]);
    }
}
