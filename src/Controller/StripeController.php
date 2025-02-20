<?php

namespace App\Controller;

use App\Entity\Cart;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Symfony\Bundle\SecurityBundle\Security;

class StripeController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private Security $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->security = $security;
    }

    #[Route('/payment', name: 'stripe_payment')]
    public function createPaymentIntent(Request $request): Response
    {
        $user = $this->security->getUser();

        if (!$user) {
            return $this->redirectToRoute('login');
        }

        // Récupérer le total du panier
        $cartItems = $this->entityManager->getRepository(Cart::class)->findBy(['user' => $user]);
        $totalAmount = 0;

        foreach ($cartItems as $item) {
            $totalAmount += $item->getQuantity() * $item->getProduct()->getPrice(); // Assure-toi que `getProduct()->getPrice()` existe
        }

        if ($totalAmount <= 0) {
            return new Response('Le panier est vide', Response::HTTP_BAD_REQUEST);
        }

        Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']); // Sécurité renforcée

        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => $totalAmount * 100, // Stripe fonctionne en centimes
                'currency' => 'eur', // Modifier en fonction de la région
            ]);

            return $this->render('payment/payment.html.twig', [
                'clientSecret' => $paymentIntent->client_secret,
                'totalAmount' => $totalAmount,
            ]);
        } catch (\Exception $e) {
            return new Response('Erreur lors de la création du paiement : ' . $e->getMessage());
        }
    }

    #[Route('/payment/success', name: 'stripe_payment_success')]
    public function paymentSuccess(): Response
    {
        return $this->render('payment/success.html.twig');
    }

    #[Route('/payment/failure', name: 'stripe_payment_failure')]
    public function paymentFailure(): Response
    {
        return $this->render('payment/failure.html.twig');
    }
}