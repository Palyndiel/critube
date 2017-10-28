<?php
// src/MM/MainBundle/Email/CommentMailer.php

namespace MM\MainBundle\Email;

use MM\MainBundle\Entity\Comment;

class CommentMailer
{
  /**
   * @var \Swift_Mailer
   */
  private $mailer;

  /**
   * @var Doctrine\ORM\EntityManager
   */
  private $em;

  public function __construct(\Swift_Mailer $mailer, Doctrine\ORM\EntityManager $em)
  {
    $this->mailer = $mailer;
    $this->em = $em;
  }

  public function sendNewNotification(Comment $comment)
  {
    $userManager = $this->getDoctrine()->getManager()->getRepository('MMUserBundle:User');

    $message = new \Swift_Message(
      'Nouvelle candidature',
      'Vous avez reçu une nouvelle candidature.'
    );

    $message
      ->addTo($userManager->findUserByUsername($comment->getArticle()->getAuthor())->getEmail()) // Ici bien sûr il faudrait un attribut "email", j'utilise "author" à la place
      ->addFrom('admin@votresite.com')
    ;

    $this->mailer->send($message);
  }
}
