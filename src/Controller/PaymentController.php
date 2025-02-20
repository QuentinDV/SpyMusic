<?php


namespace App\Controller;


use App\Service\PayPalService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PaymentController extends AbstractController
{
    private PayPalService $paypalService;

    public function __construct(PayPalService $paypalService)
    {
        $this->paypalService = $paypalService;
    }

    public function createPayment()
    {
        $paymentResponse = $this->paypalService->createPayment(100.00);
        // Gérer la réponse de PayPal
    }
}
