<?php

namespace App\Controller;

use App\Service\PayPalService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PayPalController extends AbstractController
{
    private PayPalService $payPalService;

    public function __construct(PayPalService $payPalService)
    {
        $this->payPalService = $payPalService;
    }

    #[Route('/paypal/payment', name: 'paypal_payment')]
    public function createPayment(): Response
    {
        $amount = 10.00; // Montant à tester
        $currency = 'USD'; // Devise

        $response = $this->payPalService->createPayment($amount, $currency);

        if ($response === null) {
            return new Response('Erreur lors de la création du paiement.', Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        // Assure-toi d'envoyer l'utilisateur vers l'URL PayPal pour finaliser le paiement
        return $this->redirect($response->result->links[1]->href);  // Lien pour rediriger vers PayPal
    }

    #[Route('/paypal/execute/{orderId}', name: 'paypal_execute')]
    public function executePayment($orderId): Response
    {
        $response = $this->payPalService->executePayment($orderId);

        if ($response === null) {
            return new Response('Erreur lors de l\'exécution du paiement.', Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return new Response('Paiement exécuté avec succès!');
    }
}
