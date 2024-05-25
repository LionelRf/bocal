<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticleController extends AbstractController
{
    #[Route('/article/{title}', name: 'app_article')]
    public function article(Article $article): Response
    {
        return $this->render('article/article.html.twig', [
            'article' => $article,
            
        ]);
    }
}
