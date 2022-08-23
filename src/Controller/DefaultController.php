<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default')]
    public function index(): Response
    { 
        $bonjour = "Bienvenue dans cette initiation a symfony";
        
        //Après le return on ne peut plus rien écrire
        return $this->render('default/index.html.twig', [
            'bonjour' => $bonjour,
        ]);
    }

    //#[Route('/', name: 'default_home')]
    public function home (): Response
    {
        return new Response(
            "<html><body><h1>Réponse du serveur grâce à l'objet Response</h1></body></html>"
        );
    }
}


