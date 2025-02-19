<?php

namespace App\Controller;

use PayPalCheckoutSdk\Payments\OrdersCreateRequest;
use PayPalCheckoutSdk\Payments\OrdersCaptureRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PayPalService;

class PayPalController extends AbstractController
{
    #[Route('/paypal/payment', name: 'paypal_payment')]
    public function createPayment(Request $request, PayPalService $paypalService)
    {
        $amount = '10.00'; // Montant du paiement
        $currency = 'EUR'; // Devise

        // Créer le paiement avec l'API PayPal
        $payment = $paypalService->createPayment($amount, $currency);

        // Si la création du paiement est réussie, rediriger l'utilisateur vers PayPal
        if (isset($payment->result->links)) {
            foreach ($payment->result->links as $link) {
                if ($link->rel === 'approve') {
                    return $this->redirect($link->href); // Redirection vers PayPal
                }
            }
        }

        return $this->json(['error' => 'Payment creation failed'], 500);
    }

    #[Route('/paypal/success', name: 'paypal_success')]
    public function success(Request $request, PayPalService $paypalService)
    {
        $paymentId = $request->query->get('paymentId');
        $payerId = $request->query->get('PayerID');

        // Vérifier que les identifiants sont présents
        if (!$paymentId || !$payerId) {
            return $this->redirectToRoute('homepage');
        }

        try {
            // Exécuter le paiement
            $payment = $paypalService->executePayment($paymentId, $payerId);
            return $this->json(['status' => 'success', 'details' => $payment]);
        } catch (\Exception $e) {
            // Gestion des erreurs de l'exécution du paiement
            return $this->json(['error' => $e->getMessage()], 500);
        }
    }

    #[Route('/paypal/cancel', name: 'paypal_cancel')]
    public function cancel()
    {
        return $this->json(['status' => 'cancelled']);
    }
}
?>
