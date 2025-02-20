<?php


namespace App\Controller\Admin;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Response; 
class UsersController extends AbstractController
{
    #[Route('/admin/user/{id}/delete', name: 'admin_user_delete')]
    public function deleteUser(int $id, EntityManagerInterface $em): RedirectResponse
    {
        $user = $em->getRepository(Users::class)->find($id);
        
        if ($user) {
            $em->remove($user);
            $em->flush();
            $this->addFlash('success', 'Utilisateur supprimé avec succès.');
        } else {
            $this->addFlash('error', 'Utilisateur non trouvé.');
        }

        return $this->redirectToRoute('admin');
    }

    #[Route('/admin/user/{id}/role', name: 'admin_user_update_role')]
    public function updateUserRole(int $id, EntityManagerInterface $em): RedirectResponse
    {
        $user = $em->getRepository(Users::class)->find($id);
    
        if ($user) {
            $newRole = ($user->getRole() === 'client') ? 'admin' : 'client';
            $user->setRole($newRole);

            $em->flush();
            $this->addFlash('success', 'Rôle mis à jour avec succès.');
        } else {
            $this->addFlash('error', 'Utilisateur non trouvé.');
        }
        return $this->redirectToRoute('admin');
    }

    #[Route('/admin/user/create', name: 'admin_user_create')]
    public function createUser(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new Users();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('admin_dashboard');
        }

        return $this->render('admin/user_create.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

