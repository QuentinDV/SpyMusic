<?php
namespace App\Controller\Admin;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
}


