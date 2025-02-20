<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Users;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'admin_dashboard')]
    public function dashboard(EntityManagerInterface $em): Response
    {
        $users = $em->getRepository(Users::class)->findAll();

        return $this->render('admin/dashboard.html.twig', [
            'users' => $users, // Passe bien la variable users au template
        ]);
    }
}
