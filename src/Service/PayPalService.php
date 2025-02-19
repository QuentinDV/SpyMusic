<?php
namespace App\Service;

use PayPalCheckoutSdk\Core\ApiContext;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Core\ProductionEnvironment;
use PayPalCheckoutSdk\Payments\OrdersCreateRequest;
use PayPalCheckoutSdk\Payments\OrdersCaptureRequest;
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
        $mode = $params->get('PAYPAL_MODE'); // 

        // Vérification des variables d'environnement
        if (empty($clientId) || empty($clientSecret)) {
            throw new \Exception('PayPal client ID or secret not configured correctly.');
        }

        $environment = $mode === 'live'
            ? new ProductionEnvironment($clientId, $clientSecret)
            : new SandboxEnvironment($clientId, $clientSecret);

        $this->client = new PayPalHttpClient($environment);
        $this->logger = $logger;
    }

    public function createPayment($amount, $currency = 'USD')
    {
        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');

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
            $response = $this->client->execute($request);
            return $response;
        } catch (\Exception $ex) {
            $this->logger->error('Error creating PayPal payment: ' . $ex->getMessage());
            return 'Error: ' . $ex->getMessage();
        }
    }

    public function executePayment($paymentId, $payerId)
    {
        $request = new OrdersCaptureRequest($paymentId);
        $request->prefer('return=representation');

        try {
            $response = $this->client->execute($request);
            return $response;
        } catch (\Exception $ex) {
            $this->logger->error('Error executing PayPal payment: ' . $ex->getMessage());
            return 'Error: ' . $ex->getMessage();
        }
    }

    public function getApiContext(): PayPalHttpClient
    {
        return $this->client;
    }
}
?>