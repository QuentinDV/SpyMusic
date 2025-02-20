<?php
namespace App\Controller;

use App\Service\EmailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SomeController extends AbstractController
{
    #[Route('/send-email', name: 'send_email')]
    public function sendEmail(EmailService $emailService): Response
    {
        $emailService->sendEmail(
            'client@exemple.com', // L'adresse du destinataire
            'Sujet de l\'email',
            '<h1>Ceci est un email de test</h1><p>Votre message a été envoyé avec succès !</p>'
        );

        return new Response('Email envoyé avec succès.');
    }
}
