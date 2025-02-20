<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\RegistrationFormType;
use App\Service\EmailService;  // Assurez-vous d'importer le service EmailService
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator;

class RegisterController extends AbstractController
{
    private $userAuthenticator;
    private $authenticator;
    private $emailService;  // Déclaration du service EmailService

    public function __construct(
        UserAuthenticatorInterface $userAuthenticator, 
        FormLoginAuthenticator $authenticator,
        EmailService $emailService  // Injection du service EmailService
    ) {
        $this->userAuthenticator = $userAuthenticator;
        $this->authenticator = $authenticator;
        $this->emailService = $emailService;  // Initialisation du service EmailService
    }

    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager
    ): Response {
        $users = new Users();
        $form = $this->createForm(RegistrationFormType::class, $users);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Assurez-vous que les champs sont bien renseignés
            $users->setUsername($form->get('username')->getData());  // Set username
    
            // Hachage du mot de passe
            $users->setPassword(
                $passwordHasher->hashPassword($users, $form->get('password')->getData())
            );
    
            // Sauvegarde en base de données
            $entityManager->persist($users);
            $entityManager->flush();
    
            // Envoi de l'email de confirmation
            $this->emailService->sendEmail(
                $users->getEmail(),  // L'email de l'utilisateur
                'Bienvenue sur notre site',  // Sujet de l'email
                '<h1>Bienvenue ' . $users->getUsername() . '!</h1><p>Votre compte a été créé avec succès.</p>'  // Contenu HTML
            );
    
            // Connexion automatique après inscription
            return $this->userAuthenticator->authenticateUser($users, $this->authenticator, $request);
        }
    
        return $this->render('register/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
