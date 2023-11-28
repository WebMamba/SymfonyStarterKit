<?php

namespace App\Controller;

use App\Form\RegisterFormType;
use App\Security\RegisterUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/sign-up')]
    public function signup(Request $request, RegisterUser $registerUser): Response
    {
        $form = $this->createForm(RegisterFormType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

            $registerUser->register($user);

            return $this->redirectToRoute('app_dashboard_index');
        }

        return $this->render('security/signup.html.twig', ['form' => $form]);
    }

    #[Route('/login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    #[Route('/logout')]
    public function logout(): void
    {
        throw new \Exception('This should never be reached!');
    }
}