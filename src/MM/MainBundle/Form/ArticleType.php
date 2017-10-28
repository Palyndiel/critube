<?php
// src/MM/MainBundle/Form/ArticleType.php

namespace MM\MainBundle\Form;

use MM\MainBundle\Repository\CategoryRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    // Arbitrairement, on récupère toutes les catégories qui commencent par "D"
    $pattern = 'D%';

    $builder
      ->add('title',     TextType::class)
      ->add('content',   CkeditorType::class)
      ->add('resume',    TextType::class)        
      ->add('image',     ImageType::class)
      ->add('categories', EntityType::class, array(
        'required'      => false,
        'class'         => 'MMMainBundle:Category',
        'choice_label'  => 'name',
        'multiple'      => true,
      ))
      ->add('save',      SubmitType::class)
    ;

  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'MM\MainBundle\Entity\Article'
    ));
  }
}
