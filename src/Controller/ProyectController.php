<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Proyectos;

class ProyectController extends AbstractController
{
    
    #[Route("/proyectos/{id}", name="proyectos", methods: ["GET","POST"])]
     
    public function index($id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $proyecto_repo = $this->getDoctrine()->getRepository(Proyectos::class);
        $proyecto = $proyecto_repo->findAll();

        return $this->render('proyecto.html.twig',['proyecto' => $proyecto, "id" => $id]);
    }
}
