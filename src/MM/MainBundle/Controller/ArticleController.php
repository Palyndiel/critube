<?php

// src/MM/MainBundle/Controller/ArticleController.php

namespace MM\MainBundle\Controller;

use MM\MainBundle\Entity\Article;
use MM\MainBundle\Entity\Thread;
use MM\MainBundle\Event\MessagePostEvent;
use MM\MainBundle\Event\MainEvents;
use MM\MainBundle\Form\ArticleEditType;
use MM\MainBundle\Form\ArticleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ArticleController extends Controller
{
  public function indexAction($page)
  {
    if ($page < 1) {
      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    }

    // Ici je fixe le nombre d'annonces par page à 3
    // Mais bien sûr il faudrait utiliser un paramètre, et y accéder via $this->container->getParameter('nb_per_page')
    $nbPerPage = 3;

    // On récupère notre objet Paginator
    $listArticles = $this->getDoctrine()
      ->getManager()
      ->getRepository('MMMainBundle:Article')
      ->getArticles($page, $nbPerPage)
    ;
      
    foreach($listArticles as $article){
        $thread = $this->getDoctrine()->getManager()
            ->getRepository('MMMainBundle:Thread')
            //->findById($article->getId());
            ->getThreadByArticle($article)
    ;
       $listThreads[] = $thread;
    }

    // On calcule le nombre total de pages grâce au count($listArticles) qui retourne le nombre total d'annonces
    $nbPages = ceil(count($listArticles) / $nbPerPage);
      
    if(count($listArticles) == 0){
        throw $this->createNotFoundException("Il n'y a pas encore d'article sur le site !");
    }
    elseif($page > $nbPages){
        // Si la page n'existe pas, on retourne une 404
        throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }
    

    // On donne toutes les informations nécessaires à la vue
    return $this->render('MMMainBundle:Article:index.html.twig', array(
      'listArticles' => $listArticles,
      'listThreads' => $listThreads,
      'nbPages'     => $nbPages,
      'page'        => $page,
    ));
  }
    
  public function listAction($page)
  {
    if ($page < 1) {
      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    }

    // Ici je fixe le nombre d'annonces par page à 3
    // Mais bien sûr il faudrait utiliser un paramètre, et y accéder via $this->container->getParameter('nb_per_page')
    $nbPerPage = 10;

    // On récupère notre objet Paginator
    $listArticles = $this->getDoctrine()
      ->getManager()
      ->getRepository('MMMainBundle:Article')
      ->getArticles($page, $nbPerPage)
    ;

    // On calcule le nombre total de pages grâce au count($listArticles) qui retourne le nombre total d'annonces
    $nbPages = ceil(count($listArticles) / $nbPerPage);

    // Si la page n'existe pas, on retourne une 404
    if ($page > $nbPages) {
      throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }

    // On donne toutes les informations nécessaires à la vue
    return $this->render('MMMainBundle:Article:list.html.twig', array(
      'listArticles' => $listArticles,
      'nbPages'     => $nbPages,
      'page'        => $page,
    ));
  }
    
  public function listByCatAction(Category $category)
  {
    $page = 1;
      
    if ($page < 1) {
      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    }  
      
    $nbPerPage = 10;  
    
    $listArticles = $this->getDoctrine()
      ->getManager()
      ->getRepository('MMMainBundle:Article')
      ->getArticlesByCategory($category, $page, $nbPerPage)
    ;
      
    $nbPages = ceil(count($listArticles) / $nbPerPage);

    if (count($listArticles) == 0){
        throw $this->createNotFoundException("Aucun article dans cette catégorie.");
    } 
    // Si e page n'existe pas, on retourne une 404
    elseif ($page > $nbPages) {
      throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }

    // On donne toutes les informations nécessaires à la vue
    return $this->render('MMMainBundle:Article:list.html.twig', array(
      'listArticles' => $listArticles,
      'nbPages'     => $nbPages,
      'page'        => $page,
    ));
  }

  public function viewAction(Article $article)
  {
    $em = $this->getDoctrine()->getManager();
    $user = $this->getUser();
    $hasLiked = false;

    foreach ($article->getLikes() as $like) {
      if ($like == $user){
          $hasLiked = true;
      }
    }

      
    $thread = $em
      ->getRepository('MMMainBundle:Thread')
      //->findById($article->getId());
      ->getThreadByArticle($article)
    ;
      
    return $this->render('MMMainBundle:Article:view.html.twig', array(
      'article'           => $article,
      'thread'            => $thread,
      'hasLiked'          => $hasLiked,
    ));
  }

  /**
   * @Security("has_role('ROLE_AUTEUR')")
   */
  public function addAction(Request $request)
  {
    // Plus besoin du if avec le security.context, l'annotation s'occupe de tout !
    // Dans cette méthode, vous êtes sûrs que l'utilisateur courant dispose du rôle ROLE_AUTEUR

    $article = new Article();
    $article->setAuthor($this->getUser());
      
    $form   = $this->get('form.factory')->create(ArticleType::class, $article);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      // On crée l'évènement avec ses 2 arguments
      $event = new MessagePostEvent($article->getContent(), $article->getAuthor());

      // On déclenche l'évènement
      $this->get('event_dispatcher')->dispatch(MainEvents::POST_MESSAGE, $event);

      // On récupère ce qui a été modifié par le ou les listeners, ici le message
      $article->setContent($event->getMessage());

      $em = $this->getDoctrine()->getManager();
      $em->persist($article);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      return $this->redirectToRoute('mm_main_view', array('id' => $article->getId()));
    }

    return $this->render('MMMainBundle:Article:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }
    
  public function editAction(Article $article, Request $request)
  {
    $form = $this->get('form.factory')->create(ArticleEditType::class, $article);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      // Inutile de persister ici, Doctrine connait déjà notre annonce
      $em = $this->getDoctrine()->getManager();
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

      return $this->redirectToRoute('mm_main_view', array('id' => $article->getId()));
    }

    return $this->render('MMMainBundle:Article:edit.html.twig', array(
      'article' => $article,
      'form'   => $form->createView(),
    ));
  }

  public function deleteAction(Request $request, Article $article)
  {
    $em = $this->getDoctrine()->getManager();

    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'annonce contre cette faille
    $form = $this->get('form.factory')->create();

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em->remove($article);
      $em->flush();

      $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");

      return $this->redirectToRoute('mm_main_home');
    }
    
    return $this->render('MMMainBundle:Article:delete.html.twig', array(
      'article' => $article,
      'form'   => $form->createView(),
    ));
  }

  public function menuAction($limit)
  {
    $em = $this->getDoctrine()->getManager();

    $listArticles = $em->getRepository('MMMainBundle:Article')->findBy(
      array(),                 // Pas de critère
      array('date' => 'desc'), // On trie par date décroissante
      $limit,                  // On sélectionne $limit annonces
      0                        // À partir du premier
    );

    return $this->render('MMMainBundle:Article:menu.html.twig', array(
      'listArticles' => $listArticles
    ));
  }
    
  public function likeAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $article = $em->getRepository('MMMainBundle:Article')->findById($request->request->get('id'));
    //if($request->isXmlHttpRequest())
    //{
      $article[0]->addLike($this->getUser());
      $em->flush();
    //}
    return new Response('done');
  }
    
    public function getlikeAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $article = $em->getRepository('MMMainBundle:Article')->findById($request->request->get('id'));
    //if($request->isXmlHttpRequest())
    //{
      $nbLikes = $article[0]->getNbLikes();
    //}
    return new Response($nbLikes);
  }
    
  public function dislikeAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    //$article = $em->getRepository('MMMainBundle:Article')->findById($request->request->get('id'));
    $article = $em->getRepository('MMMainBundle:Article')->findById(1);
    //if($request->isXmlHttpRequest())
    //{
      $article[0]->removeLike($this->getUser());
      $em->flush();
    //}
    return new Response('done');
  }

  // Méthode facultative pour tester la purge
  public function purgeAction($days, Request $request)
  {
    // On récupère notre service
    $purger = $this->get('mm_main.purger.article');

    // On purge les annonces
    $purger->purge($days);

    // On ajoute un message flash arbitraire
    $request->getSession()->getFlashBag()->add('info', 'Les annonces plus vieilles que '.$days.' jours ont été purgées.');

    // On redirige vers la page d'accueil
    return $this->redirectToRoute('mm_main_home');
  }

  public function translationAction($name)
  {
    return $this->render('MMMainBundle:Article:translation.html.twig', array(
      'name' => $name
    ));
  }

  /**
   * @ParamConverter("json")
   */
  public function ParamConverterAction($json)
  {
    return new Response(print_r($json, true));
  }
}
