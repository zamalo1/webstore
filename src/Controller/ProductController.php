<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("mazalov penis");
    }

    /**
     * @Route("/details{slug}")
     */
    public function details()
    {
        $slug=1;
        return new Response("kurcina=$slug");
    }
}