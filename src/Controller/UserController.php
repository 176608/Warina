<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        // Obtener toda la información del usuario en sesión
        $userInfo = $this->getUser();

        // Renderizar la información del usuario utilizando el servicio de renderizado Twig
        $renderedUserInfo = $renderTwigService->renderUserInfo($userInfo);

        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
