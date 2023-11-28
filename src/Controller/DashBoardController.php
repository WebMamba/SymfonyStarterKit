<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DashBoardController extends AbstractController
{
    #[Route('/dashboard')]
    #[IsGranted('ROLE_USER')]
    public function index()
    {
        return $this->render('dashboard.html.twig');
    }
}