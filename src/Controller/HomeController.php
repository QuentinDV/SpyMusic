<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    
    #[Route('/', name: 'home')]
     
    public function index(): Response
    {
        $contents = $this->renderView('home/index.html');

        return $this->redirectToRoute('spotify_home');
    }
} 
?> 