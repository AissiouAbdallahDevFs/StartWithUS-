<?php

namespace App\Controller;

use App\Entity\Annonces;
use App\Form\AnnonceFormType;
use App\Repository\AnnoncesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'home_page')]
    public function form(Request $request): Response
    {
        $annonce = new Annonces();
        $form = $this->createForm(AnnonceFormType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($annonce);
            $entityManager->flush();

            return $this->redirectToRoute('annonces');
        }

        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
            'annonce' => $annonce,
            'form' => $form->createView(),
        ]);
    }
}
