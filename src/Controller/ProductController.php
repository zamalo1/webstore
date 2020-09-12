<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("mazalo");
    }

    /**
     * @Route("/details")
     */
    public function details()
    {

        return $this->render('product/details.html.twig',[
            'pitanje'=> 'who are you',
            'slug'=>2
        ]);
    }
}