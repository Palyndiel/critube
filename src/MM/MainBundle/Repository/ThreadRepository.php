<?php

namespace MM\MainBundle\Repository;

use Doctrine\ORM\EntityRepository;
use MM\MainBundle\Entity\Article;

class ThreadRepository extends EntityRepository
{
  public function getThreadByArticle(Article $article)
  {
    $qb = $this->createQueryBuilder('t');

    $qb
      ->where('t.id = :id')
      ->setParameter('id', $article->getId())
    ;

    $query = $qb->getQuery();
    // Enfin, on retourne le résultat
    return $query
      ->getOneOrNullResult()
    ;
  }
}

