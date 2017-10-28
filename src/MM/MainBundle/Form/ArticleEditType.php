<?php
// src/MM/MainBundle/Form/ArticleEditType.php

namespace MM\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ArticleEditType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->add('image',     ImageType::class, array(
        'required'      => false,));
  }

  public function getParent()
  {
    return ArticleType::class;
  }
}
