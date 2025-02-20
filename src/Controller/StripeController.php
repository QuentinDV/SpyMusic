<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class StripeController extends AbstractController
{
    #[Route('/payment', name: 'stripe_payment')]
    public function createPaymentIntent(Request $request): Response
    {
        $amount = $request->get('amount');  // Get the amount from the URL parameter (in cents)

        // Set your secret key for Stripe API (use the correct one for production)
        Stripe::setApiKey('your_stripe_secret_key');

        try {
            // Create a PaymentIntent with the amount and currency
            $paymentIntent = PaymentIntent::create([
                'amount' => $amount,
                'currency' => 'usd', // Set your currency here
            ]);

            return $this->render('payment/payment.html.twig', [
                'clientSecret' => $paymentIntent->client_secret,
            ]);
        } catch (\Exception $e) {
            // Handle errors (e.g., log error, display error message)
            return new Response('Error creating payment intent: ' . $e->getMessage());
        }
    }

    #[Route('/payment/success', name: 'stripe_payment_success')]
    public function paymentSuccess(): Response
    {
        // Handle post-payment success logic (e.g., update order status, thank user)
        return $this->render('payment/success.html.twig');
    }

    #[Route('/payment/failure', name: 'stripe_payment_failure')]
    public function paymentFailure(): Response
    {
        // Handle post-payment failure logic (e.g., show error message)
        return $this->render('payment/failure.html.twig');
    }
}
