<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CatalogController extends Controller
{
    /**
     * @Route("/", name="catalog")
     */
    public function indexAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $categories = $em->getRepository('AppBundle:Categorie')
        ->findAll();
        return $this->render('catalog/index.html.twig', [
            'categories' => $categories
        ]);
    }

    /**
     * @Route("category/{id}", name="category")
     */
    public function showAction($id)
    {
      $em = $this->getDoctrine()->getManager();
      $categories = $em->getRepository('AppBundle:Categorie')
        ->findAll();
      $products = $em->getRepository('AppBundle:Product')
        ->findAll();

        return $this->render('catalog/category.html.twig', [
            'categories' => $categories,
            'products' => $products,
            'id' => $id
        ]);
    }

    /**
     * @Route("product/{id}", name="product")
     */
    public function showProduct($id)
    {
      $em = $this->getDoctrine()->getManager();
      $products = $em->getRepository('AppBundle:Product')
        ->findAll();

        return $this->render('catalog/product.html.twig', [
            'products' => $products,
            'id' => $id
        ]);
    }
}
