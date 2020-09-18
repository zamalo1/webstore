<?php


namespace App\Controller;


use App\Entity\Products;
use App\form\ProductFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/add_product")
     */
    public function addProduct(Request $request, EntityManagerInterface $em)
    {
           $form=$this->createForm(ProductFormType::class);
           $form->handleRequest($request);
           if ($form->isSubmitted() && $form->isValid()){
               $data=$form->getData();
               $product=new Products();
               $product->setName($data['name']);
               $product->setPrice($data['price']);
               $product->setImages($data['images']);
               dd($product->getImages());
               $product->setCategoryId(intval($data['categoryId']->getId()));

               $em->persist($product);
               $em->flush();
               }
           return $this->render('admin/add_product.html.twig',[
               'productForm'=>$form->createView(),
           ]);
    }
}