<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\Response;

class DashBoardController extends AbstractController
{
    #[Route('/dashboard')]
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
        return $this->render('dashboard.html.twig');
    }
}