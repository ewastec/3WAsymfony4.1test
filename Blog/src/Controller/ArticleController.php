<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\HttpFoundation\Response;
use Symfony\Bundle\FrameworkExtraBundle\Configuration\Method;



class ArticleController extends Controller
{
    /**
     * @Route("/", name="article")
     */
    public function index()
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }
}
