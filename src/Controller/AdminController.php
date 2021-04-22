<?php

namespace App\Controller;
use App\Entity\Voiture;
use App\Repository\VoitureRepository;
use App\Entity\Agence;
use App\Repository\AgenceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(AgenceRepository $agenceRepository,VoitureRepository $voitureRepository): Response
    {   
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'agences' => $agenceRepository->findAll(),
            'voitures'=> $voitureRepository->findAll()
        ]);
    }

}
