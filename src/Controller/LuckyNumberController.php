<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyNumberController extends AbstractController
{
    #[Route('/lucky/number', name: 'app_lucky_number')]
    public function index(): Response
    {
        $number = \random_int(0,100);
        return $this->render('lucky_number/index.html.twig', [
            'controller_name' => 'LuckyNumberController',
            'number' => $number,
        ]);
    }
}
