<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Si l'utilisateur est déjà connecté, il peut être redirigé
        if ($this->getUser()) {
            return $this->redirectToRoute('home'); // Redirige vers la page d'accueil ou une autre page
        }

        // Récupérer le dernier email saisi dans le formulaire de connexion
        $lastUsername = $authenticationUtils->getLastUsername();

        // Récupérer l'erreur d'authentification (si présente)
        $error = $authenticationUtils->getLastAuthenticationError();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        // Cette méthode sera gérée automatiquement par Symfony lors de la déconnexion
    }
}