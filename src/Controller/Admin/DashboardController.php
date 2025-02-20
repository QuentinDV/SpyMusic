<?php
namespace App\Controller\Admin;

use App\Entity\Users;
use EasyCorp\Bundle\EasyAdminBundle\Attribute\AdminDashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[AdminDashboard(routePath: '/admin')]
class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // Rediriger vers le tableau de bord d'EasyAdmin
        return $this->render('admin/dashboard.html.twig'); // Assure-toi que ce fichier existe
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SpyMusic');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
            MenuItem::section('Gestion des utilisateurs'),
            MenuItem::linkToCrud('Utilisateurs', 'fas fa-users', Users::class), // Ajout du CRUD Users
        ];
    }
}
