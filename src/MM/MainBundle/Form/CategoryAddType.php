<?php
// src/MM/MainBundle/Form/ArticleEditType.php

namespace MM\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CategoryAddType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder ->add('save', SubmitType::class);
  }

  public function getParent()
  {
    return CategoryType::class;
  }
}
