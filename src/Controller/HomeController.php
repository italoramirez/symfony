<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="inicio")
     */
    public function inicio()
    {
        $datos = [
            [
                'id'     => 1,
                'nombre' => 'Juan',
                'edad'   => 26
            ],
            [
                'id'     => 2,
                'nombre' => 'Luis',
                'edad'   => 31
            ],
            [
                'id'     => 3,
                'nombre' => 'Carla',
                'edad'   => 28
            ],
            [
                'id'     => 4,
                'nombre' => 'Laura',
                'edad'   => 35
            ]
        ];
        // print_r('página de inicio');
        // exit();

        return $this->render('home/index.html.twig', [
            'nombre' => 'Juan',
            'alumnos' => $datos
        ]);
    }

    /**
     * @Route("/cliente/{nombre}/{edad}", name="cliente")
     */
    public function cliente($nombre = 'sin nombre', $edad = 0)
    {

        return new Response('su nombre es ' . $nombre . ' y su edad es ' . $edad);
        exit();

        // return $this->render('home/index.html.twig', [
        //     'controller_name' => 'HomeController',
        // ]);
    }
}
