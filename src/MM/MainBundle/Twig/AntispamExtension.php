<?php
// src/MM/MainBundle/Twig/AntispamExtension.php

namespace MM\MainBundle\Twig;

use MM\MainBundle\Antispam\MMAntispam;

class AntispamExtension extends \Twig_Extension
{
  /**
   * @var MMAntispam
   */
  private $mmAntispam;

  public function __construct(MMAntispam $mmAntispam)
  {
    $this->mmAntispam = $mmAntispam;
  }

  public function checkIfArgumentIsSpam($text)
  {
    return $this->mmAntispam->isSpam($text);
  }

  // Twig va ex�cuter cette m�thode pour savoir quelle(s) fonction(s) ajoute notre service
  public function getFunctions()
  {
    return array(
      new \Twig_SimpleFunction('checkIfSpam', array($this, 'checkIfArgumentIsSpam')),
      // Dans notre cas, on pourrait �galement utiliser directement le service MMAntispam :
      // new \Twig_SimpleFunction('checkIfSpam', array($this->mmAntispam, 'isSpam')),
    );
}

  // La m�thode getName() identifie votre extension Twig, elle est obligatoire
  public function getName()
  {
    return 'MMAntispam';
  }
}
