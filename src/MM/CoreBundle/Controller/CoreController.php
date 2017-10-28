<?php

namespace MM\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use MM\CoreBundle\Entity\Contact;
use MM\CoreBundle\Form\ContactType;

class CoreController extends Controller
{
  // La page d'accueil
  public function indexAction()
  {
    // On retourne simplement la vue de la page d'accueil
    // L'affichage des 3 dernières annonces utilisera le contrôleur déjà existant dans PlatformBundle
    return $this->render('MMCoreBundle:Core:index.html.twig');

    // La méthode longue $this->get('templating')->renderResponse('...') est parfaitement valable
  }
    
  public function aboutAction()
  {
    return $this->render('MMCoreBundle:Core:about.html.twig');
  }
    
  public function contactAction(Request $request)
  {
    $contact = new Contact();
    if(null !== ($this->getUser()))
    {
        $contact->setName($this->getUser());
        $contact->setEmail($this->getUser()->getEmail());
    }
      
    $form   = $this->get('form.factory')->create(ContactType::class, $contact);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

      $em = $this->getDoctrine()->getManager();
      $em->persist($article);
      $em->flush();    
    
      $request->getSession()->getFlashBag()->add('info', "Votre mail a bien été envoyé.");

      return $this->redirectToRoute('mm_core_contact');
    }
    
    return $this->render('MMCoreBundle:Core:contact.html.twig', array(
      'form'   => $form->createView(),
    ));
  }
}
