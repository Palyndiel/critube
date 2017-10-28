<?php
// src/MM/MainBundle/Entity/Article.php

namespace MM\MainBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
//use MM\MainBundle\Validator\Antiflood;
// On rajoute ce use pour la contrainte :
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
// N'oubliez pas de rajouter ce « use », il définit le namespace pour les annotations de validation
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="MM\MainBundle\Repository\ArticleRepository")
 * @ORM\HasLifecycleCallbacks()
 *
 * @UniqueEntity(fields="title", message="Une annonce existe déjà avec ce titre.")
 */
class Article
{
  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="date", type="datetime")
   * @Assert\DateTime()
   */
  private $date;

  /**
   * @var string
   *
   * Et pour être logique, il faudrait aussi mettre la colonne titre en Unique pour Doctrine :
   * @ORM\Column(name="title", type="string", length=255, unique=true)
   */
  private $title;
    
  /**
   * @ORM\ManyToOne(targetEntity="MM\UserBundle\Entity\User")
   * @Assert\Valid()
   */
  private $author;

  /**
   * @var string
   *
   * @ORM\Column(name="content", type="string", length=255)
   * @Assert\NotBlank()
   */
  private $content;
    
  /**
   * @var string
   *
   * @ORM\Column(name="resume", type="string", length=255)
   * @Assert\NotBlank()
   */
  private $resume;

  /**
   * @ORM\OneToOne(targetEntity="MM\MainBundle\Entity\Image", cascade={"persist", "remove"})
   * @Assert\Valid()
   * @ORM\JoinColumn(nullable=true)
   */
  private $image;

  /**
   * @ORM\ManyToMany(targetEntity="MM\MainBundle\Entity\Category", cascade={"persist"})
   * @ORM\JoinTable(name="article_category")
   */
  private $categories;
    
  /**
   * @ORM\ManyToMany(targetEntity="MM\UserBundle\Entity\User", cascade={"persist"})
   * @ORM\JoinTable(name="article_user")
   */
  private $likes;

  /**
   * @ORM\Column(name="updated_at", type="datetime", nullable=true)
   */
  private $updatedAt;
    
  /**
   * @ORM\Column(name="nb_likes", type="integer")
   */
  private $nbLikes = 0;

  /**
   * @Gedmo\Slug(fields={"title"})
   * @ORM\Column(name="slug", type="string", length=255, unique=true)
   */
  private $slug;

  public function __construct()
  {
    $this->date         = new \Datetime();
    $this->categories   = new ArrayCollection();
  }

  /**
   * @ORM\PreUpdate
   */
  public function updateDate()
  {
    $this->setUpdatedAt(new \Datetime());
  }

  public function increaseLike()
  {
    $this->nbLikes++;
  }

  public function decreaseLike()
  {
    $this->nbLikes--;
  }

  /**
   * @Assert\Callback
   */
  public function isContentValid(ExecutionContextInterface $context)
  {
    $forbiddenWords = array('démotivation', 'abandon');

    // On vérifie que le contenu ne contient pas l'un des mots
    if (preg_match('#'.implode('|', $forbiddenWords).'#', $this->getContent())) {
      // La règle est violée, on définit l'erreur
      $context
        ->buildViolation('Contenu invalide car il contient un mot interdit.') // message
        ->atPath('content')                                                   // attribut de l'objet qui est violé
        ->addViolation() // ceci déclenche l'erreur, ne l'oubliez pas
      ;
    }
  }

  /**
   * @return int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param \DateTime $date
   */
  public function setDate($date)
  {
    $this->date = $date;
  }

  /**
   * @return \DateTime
   */
  public function getDate()
  {
    return $this->date;
  }

  /**
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }

  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * @param string $content
   */
  public function setContent($content)
  {
    $this->content = $content;
  }

  /**
   * @return string
   */
  public function getContent()
  {
    return $this->content;
  }

  public function setImage(Image $image = null)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

  /**
   * @param Category $category
   */
  public function addCategory(Category $category)
  {
    $this->categories[] = $category;
  }

  /**
   * @param Category $category
   */
  public function removeCategory(Category $category)
  {
    $this->categories->removeElement($category);
  }

  /**
   * @return ArrayCollection
   */
  public function getCategories()
  {
    return $this->categories;
  }

  /**
   * @param \DateTime $updatedAt
   */
  public function setUpdatedAt(\Datetime $updatedAt = null)
  {
      $this->updatedAt = $updatedAt;
  }

  /**
   * @return \DateTime
   */
  public function getUpdatedAt()
  {
      return $this->updatedAt;
  }

  /**
   * @param string $slug
   */
  public function setSlug($slug)
  {
      $this->slug = $slug;
  }

  /**
   * @return string
   */
  public function getSlug()
  {
      return $this->slug;
  }

    /**
     * Add like
     *
     * @param \MM\UserBundle\Entity\User $like
     *
     * @return Article
     */
    public function addLike(\MM\UserBundle\Entity\User $like)
    {
        $this->likes[] = $like;
        $this->increaseLike();

        return $this;
    }

    /**
     * Remove like
     *
     * @param \MM\UserBundle\Entity\User $like
     */
    public function removeLike(\MM\UserBundle\Entity\User $like)
    {
        $this->likes->removeElement($like);
        $this->decreaseLike();
    }

    /**
     * Get likes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set nbLikes
     *
     * @param integer $nbLikes
     *
     * @return Article
     */
    public function setNbLikes($nbLikes)
    {
        $this->nbLikes = $nbLikes;

        return $this;
    }

    /**
     * Get nbLikes
     *
     * @return integer
     */
    public function getNbLikes()
    {
        return $this->nbLikes;
    }

    /**
     * Set resume
     *
     * @param string $resume
     *
     * @return Article
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set author
     *
     * @param \MM\UserBundle\Entity\User $author
     *
     * @return Article
     */
    public function setAuthor(\MM\UserBundle\Entity\User $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \MM\UserBundle\Entity\User
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
