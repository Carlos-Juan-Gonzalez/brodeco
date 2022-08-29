<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Proyectos;

class HomeController extends AbstractController
{
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $proyecto_repo = $this->getDoctrine()->getRepository(Proyectos::class);
        $proyecto = $proyecto_repo->findAll();

        return $this->render('base.html.twig',['proyecto' => $proyecto]);
    }

}
