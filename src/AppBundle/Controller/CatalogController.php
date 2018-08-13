<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
//use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

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

        $users = $em->getRepository('AppBundle:User')
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
        $categories = $em->getRepository("AppBundle:Categorie")->findAll();
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
            'categories' => $categories,
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

    /**
     * @Route("/search", name="search_bar_result", method="GET")
     */
    public function searchBarAction(Request $request) {        
        $form = $this
            ->createFormBuilder()
            ->add('search', SearchType::class)
            ->getForm()
        ;

        if ($request->isMethod('GET') && $form->handleRequest($request)->isValid()) {
            $res = $form->getData();
            $search = $res['search'];
            
            $em = $this
                ->getDoctrine()
                ->getManager()
            ;

            $products = $em
                ->getRepository('AppBundle:Product')
                ->getProductsByName($search)
            ;

            return $this->render('catalog/searchBarResult.html.twig', array(
                'products' => $products
            ));
        }

        return $this->render('catalog/searchBar.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
