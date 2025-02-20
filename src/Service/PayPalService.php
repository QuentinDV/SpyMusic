<?php
// src/Service/PayPalService.php

namespace App\Service;

use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PaypalServerSdkLib\Request\Orders\OrdersCreateRequest;
use PaypalServerSdkLib\Request\Orders\OrdersCaptureRequest;

class PayPalService
{
    private $clientId;
    private $clientSecret;
    private $environment;
    private $client;

    public function __construct(string $clientId, string $clientSecret, string $mode = 'sandbox')
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;

        // Configure the environment (sandbox or live)
        if ($mode === 'sandbox') {
            $this->environment = new SandboxEnvironment($this->clientId, $this->clientSecret);
        } else {
            throw new \Exception('Mode not supported.');
        }

        // Create the PayPal HTTP client
        $this->client = new PayPalHttpClient($this->environment);
    }

    public function createPayment(float $amount, string $currency, string $returnUrl, string $cancelUrl)
    {
        // Create a request to set up the payment
        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');
        $request->body = [
            'intent' => 'CAPTURE',
            'application_context' => [
                'return_url' => $returnUrl,
                'cancel_url' => $cancelUrl,
            ],
            'purchase_units' => [[
                'amount' => [
                    'currency_code' => $currency,
                    'value' => $amount,
                ],
            ]],
        ];

        try {
            // Execute the request
            $response = $this->client->execute($request);
            return $response;
        } catch (\Exception $e) {
            throw new \Exception("Error creating payment: " . $e->getMessage());
        }
    }

    public function executePayment(string $orderId)
    {
        // Create a request to capture the payment
        $request = new OrdersCaptureRequest($orderId);
        $request->prefer('return=representation');

        try {
            // Execute the request
            $response = $this->client->execute($request);
            return $response;
        } catch (\Exception $e) {
            throw new \Exception("Error executing payment: " . $e->getMessage());
        }
    }
}
?>