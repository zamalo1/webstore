<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ProductController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twigEnvironment)
    {
        $html=$twigEnvironment->render('product/homepage.html.twig');
        return new Response($html);
    }

    /**
     * @Route("/details{id}", name="app_details")
     */
    public function details($id)
    {
        return $this->render('product/details.html.twig',[
            'pitanje'=> 'who are you'
        ]);
    }
}