<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class PaymentController extends AbstractController
{
    #[Route('/payment', name: 'payment')]
    public function payment(): Response
    {
        return $this->render('payment/payment.html.twig');
    }

    #[Route('/payment/process', name: 'payment_process', methods: ['POST'])]
    public function processPayment(Request $request): Response
    {
        // Your payment processing logic goes here
        // For example, interacting with Stripe API
        
        // Return a response after processing
        return new Response('Payment processed');
    }
}
