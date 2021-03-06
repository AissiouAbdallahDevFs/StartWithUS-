<?php

namespace App\Controller;

use App\Repository\AnnoncesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnoncesController extends AbstractController
{
    #[Route('/annonces', name: 'annonces')]
    public function index( AnnoncesRepository $AnnoncesRepository ): Response
    {
        return $this->render('annonces_liste/index.html.twig', [
            'controller_name' => 'AnnoncesListeController',
           'annonces' => $AnnoncesRepository->findAll(),
        ]);
    }
}
