<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProyectController extends AbstractController
{
    /**
     * @Route("/proyect", name="proyect")
     */
    public function index(): Response
    {
        return $this->render('proyecto.html.twig');
    }
}
