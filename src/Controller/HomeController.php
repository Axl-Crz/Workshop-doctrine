<?php

namespace App\Controller;

use App\Repository\NutRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\SquirrelRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SquirrelRepository $squirellRepository, NutRepository $nutRepository): Response
    {

        return $this->render('home/index.html.twig', [
            'squirrels' => $squirellRepository->findAll(),
            'nuts' => $nutRepository->findAll(),
        ]);
    }
}
