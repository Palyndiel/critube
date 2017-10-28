<?php
// src/MM/MainBundle/Purger/ArticlePurger.php

namespace MM\MainBundle\Purger;

use Doctrine\ORM\EntityManagerInterface;

class ArticlePurger
{
  /**
   * @var EntityManagerInterface
   */
  private $em;

  // On injecte l'EntityManager
  public function __construct(EntityManagerInterface $em)
  {
    $this->em = $em;
  }

  public function purge($days)
  {
    $articleRepository      = $this->em->getRepository('MMMainBundle:Article');

    // date d'il y a $days jours
    $date = new \Datetime($days.' days ago');

    // On récupère les annonces à supprimer
    $listArticles = $articleRepository->getArticlesBefore($date);

    // On parcourt les annonces pour les supprimer effectivement
    foreach ($listArticles as $article) {
      // On peut maintenant supprimer l'annonce
      $this->em->remove($article);
    }

    // Et on n'oublie pas de faire un flush !
    $this->em->flush();
  }
}
