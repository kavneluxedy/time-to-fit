<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TrainingSessionController extends AbstractController
{
    #[Route('/training', name: 'training')]
    public function index(): Response
    {
        // the template path is the relative file path from `templates/`
        return $this->render('training/index.html.twig', []);
    }
}
