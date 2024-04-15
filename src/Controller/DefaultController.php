<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $utilisateurs = [
            [
                'prenom' => 'Jean',
                'nom' => 'Dupont'
            ],
            [
                'prenom' => 'Marie',
                'nom' => 'Jeanne'
            ],
            [
                'prenom' => 'Philippe',
                'nom' => 'Moris'
            ],
        ];

        return $this->render('test.html.twig', ['utilisateurs' => $utilisateurs]);
    }
}
