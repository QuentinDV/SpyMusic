<?php

namespace App\Service;

use Stripe\Checkout\Session;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class StripeService
{
    private $secretKey;

    public function __construct(string $secretKey)
    {
        $this->secretKey = $secretKey;
        Stripe::setApiKey($this->secretKey);
    }

    public function createCheckoutSession(float $amount, string $currency, string $successUrl, string $cancelUrl)
    {
        try {
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => $currency,
                            'product_data' => [
                                'name' => 'Product name', // Remplace par le nom de ton produit
                            ],
                            'unit_amount' => $amount * 100, // Stripe attend le montant en cents
                        ],
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'payment',
                'success_url' => $successUrl,
                'cancel_url' => $cancelUrl,
            ]);

            return $session;
        } catch (\Exception $e) {
            throw new \Exception('Error creating Stripe session: ' . $e->getMessage());
        }
    }
}
