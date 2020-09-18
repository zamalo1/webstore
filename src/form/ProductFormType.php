<?php


namespace App\form;


use App\Entity\ProductCategory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use function Symfony\Component\String\s;

class ProductFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('price')
            ->add('imageFile',FileType::class)
            ->add('categoryId', EntityType::class, [
                'class' => ProductCategory::class,
                'choice_label' => function( ProductCategory $category){
                    return sprintf('%s', $category->getName());
                }
    ]);

    }

}