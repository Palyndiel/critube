<?php
// src/MyProject/MyBundle/Entity/Thread.php

namespace MM\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Thread as BaseThread;

/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="MM\MainBundle\Repository\ThreadRepository")
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Thread extends BaseThread
{
    /**
     * @var string $id
     *
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $id;
    
        /**
     * Gets the number of comments
     *
     * @return integer
     */
    public function getNumComments()
    {
        return $this->numComments;
    }
}
