<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    /**
     * @Route("/user", name="catalog")
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
      $casings = $em->getRepository('AppBundle:Casing')
        ->findAll();
      $cpus = $em->getRepository('AppBundle:Cpu')
        ->findAll();
      $gpus = $em->getRepository('AppBundle:Gpu')
        ->findAll();
      $motherboards = $em->getRepository('AppBundle:Motherboard')
        ->findAll();
      $powers = $em->getRepository('AppBundle:PowerSupply')
        ->findAll();
      $rams = $em->getRepository('AppBundle:Ram')
        ->findAll();

        return $this->render('catalog/product.html.twig', [
            'products' => $products,
            'casings' => $casings,
            'cpus' => $cpus,
            'gpus' => $gpus,
            'motherboards' => $motherboards,
            'powers' => $powers,
            'rams' => $rams,
            'id' => $id
        ]);
    }
}
