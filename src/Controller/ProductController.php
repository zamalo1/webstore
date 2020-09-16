<?php


namespace App\Controller;


use App\Entity\Product;
use App\Entity\ProductCategory;
use App\Entity\Products;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ProductController extends AbstractController
{


    public function base(EntityManagerInterface $em)
    {
        $categoryRepositoty=$em->getRepository(ProductCategory::class);
        $category=$categoryRepositoty->findAll();
        return $this->render('base.html.twig',['categories'=>$category]);
    }

    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twigEnvironment,EntityManagerInterface $em)
    {
        $repository=$em->getRepository(Products::class);
        $products=$repository->findAll();
        $categoryRepositoty=$em->getRepository(ProductCategory::class);
        $category=$categoryRepositoty->findAll();
        $html=$twigEnvironment->render('product/homepage.html.twig',['products'=>$products,'categories'=>$category]);
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