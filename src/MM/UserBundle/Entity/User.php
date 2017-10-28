<?php

namespace MM\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="MM\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
    
  /**
   * @ORM\OneToOne(targetEntity="MM\MainBundle\Entity\Image", cascade={"persist", "remove"})
   * @Assert\Valid()
   * @ORM\JoinColumn(nullable=true)
   */
  protected $avatar;

    /**
     * Set avatar
     *
     * @param \MM\MainBundle\Entity\Image $avatar
     *
     * @return User
     */
    public function setAvatar(\MM\MainBundle\Entity\Image $avatar = null)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return \MM\MainBundle\Entity\Image
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
}
