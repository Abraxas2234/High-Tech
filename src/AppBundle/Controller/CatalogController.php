<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CatalogController extends Controller
{
    /**
     * @Route("/", name="/catalog")
     */
    public function indexAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $categories = $em->getRepository('AppBundle:Categorie')
        ->findAll();
        // replace this example code with whatever you need
        return $this->render('catalog/index.html.twig', [
            'categories' => $categories
        ]);
    }
    /**
     * @Route("catalog/{id}", name="category")
     */
    public function showAction($id)
    {
      $em = $this->getDoctrine()->getManager();
      $categories = $em->getRepository('AppBundle:Categorie')
        ->findAll();
      $products = $em->getRepository('AppBundle:Product')
        ->findAll();

        // replace this example code with whatever you need
        return $this->render('catalog/category.html.twig', [
            'categories' => $categories,
            'products' => $products,
            'id' => $id
        ]);
    }
}
