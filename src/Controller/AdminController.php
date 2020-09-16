<?php


namespace App\Controller;


use App\form\ProductFormType;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/add_product")
     */
    public function addProduct()
    {
           $form=$this->createForm(ProductFormType::class);
           return $this->render('admin/add_product.html.twig',[
               'productForm'=>$form->createView(),
           ]);
    }
}