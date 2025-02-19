<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\RegistrationFormType;
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

    public function __construct(UserAuthenticatorInterface $userAuthenticator, FormLoginAuthenticator $authenticator)
    {
        $this->userAuthenticator = $userAuthenticator;
        $this->authenticator = $authenticator;
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

            $users->setUsername($form->get('username')->getData()); // Ajoutez ceci pour set le username
    
            // Hachage du mot de passe
            $users->setPassword(
                $passwordHasher->hashPassword($users, $form->get('password')->getData())
            );
    
            // Sauvegarde en base de données
            $entityManager->persist($users);
            $entityManager->flush();
    
            // Connexion automatique après inscription
            return $this->userAuthenticator->authenticateUser($users, $this->authenticator, $request);
        }
    
        return $this->render('register/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
