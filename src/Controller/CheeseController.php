<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheeseController extends AbstractController
{
    /**
     *
     * @Route("/cheese", name="cheese")
     */
    public function index(): Response
    {
        return $this->render('cheese/index.html.twig', [
            'controller_name' => 'CheeseController',
        ]);
    }
}
