<?php

// src/MM/MainBundle/Controller/ArticleController.php

namespace MM\MainBundle\Controller;

use MM\MainBundle\Entity\Category;
use MM\MainBundle\Form\CategoryAddType;
use MM\MainBundle\Event\MessagePostEvent;
use MM\MainBundle\Event\MainEvents;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CategoryController extends Controller
{
    public function listCatAction()
    {
        $listCategories = $this->getDoctrine()
          ->getManager()
          ->getRepository('MMMainBundle:Category')
          ->findAll()
        ;

        // On donne toutes les informations nécessaires à la vue
        return $this->render('MMMainBundle:Category:list_cat.html.twig', array(
          'listCategories' => $listCategories,
        ));
    }
    
    /**
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function addCatAction(Request $request)
    {
        $category = new Category();

        $form = $this->get('form.factory')->create(CategoryAddType::class, $category);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

          $em = $this->getDoctrine()->getManager();
          $em->persist($category);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Categorie bien enregistrée.');

          return $this->redirectToRoute('mm_main_add_cat');
        }

        return $this->render('MMMainBundle:Category:add_cat.html.twig', array(
          'form' => $form->createView(),
        ));
    }
}
