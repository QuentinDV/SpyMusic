<?php
namespace App\Service;

use PayPalHttpClient;
use PayPal\Orders\OrdersCreateRequest;
use PayPal\Orders\OrdersCaptureRequest;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Psr\Log\LoggerInterface;

class PayPalService
{
    private PayPalHttpClient $client;
    private LoggerInterface $logger;

    public function __construct(ParameterBagInterface $params, LoggerInterface $logger)
    {
        $clientId = $params->get('PAYPAL_CLIENT_ID');
        $clientSecret = $params->get('PAYPAL_SECRET');
        $mode = $params->get('PAYPAL_MODE'); // "sandbox" or "live"

        if (empty($clientId) || empty($clientSecret)) {
            throw new \Exception('PayPal client ID or secret is missing.');
        }

        // Utilisation des clés d'API directement dans les requêtes
        $this->client = new PayPalHttpClient($clientId, $clientSecret);
        $this->logger = $logger;
    }

    public function createPayment($amount, $currency = 'USD')
    {
        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');

        // Construction du corps de la requête de paiement pour PayPal
        $request->body = [
            'intent' => 'CAPTURE',
            'purchase_units' => [[
                'amount' => [
                    'currency_code' => $currency,
                    'value' => $amount,
                ],
            ]],
            'application_context' => [
                'return_url' => "http://127.0.0.1:8000/payment/execute",
                'cancel_url' => "http://127.0.0.1:8000/payment/cancel",
            ]
        ];

        try {
            // Exécution de la requête pour créer le paiement
            $response = $this->client->execute($request);
            return $response;
        } catch (\Exception $ex) {
            $this->logger->error('Error creating PayPal payment: ' . $ex->getMessage());
            return null;
        }
    }

    public function executePayment($orderId)
    {
        $request = new OrdersCaptureRequest($orderId);
        $request->prefer('return=representation');

        try {
            // Exécution de la requête de capture de paiement
            $response = $this->client->execute($request);
            return $response;
        } catch (\Exception $ex) {
            $this->logger->error('Error executing PayPal payment: ' . $ex->getMessage());
            return null;
        }
    }
}
