<?php

namespace App\Controller;

use App\Form\FormAnnonceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'home_page')]
    public function index(): Response
    {
        $from = $this->createForm(FormAnnonceType::class);
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
            'form' => $from->createView()
        ]);
    }
}
