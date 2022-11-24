<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_article')]
    public function index(): Response
    {
        $tableau = [2, 5, 10, 12, 22, 103];
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
            'tableau' => $tableau,
        ]);
    }
}
