<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

class CatalogController extends Controller
{
    /**
     * @Route("/", name="catalog")
     */
    public function indexAction(Request $request)
    {
        $em = $this
            ->getDoctrine()
            ->getManager()
        ;

        $categories = $em
            ->getRepository('AppBundle:Category')
            ->findAll()
        ;

        $users = $em
            ->getRepository('AppBundle:User')
            ->findAll()
        ;

        return $this->render('catalog/index.html.twig', [
            'categories' => $categories
        ]);
    }

    /**
     * @Route("category/{id}", name="category")
     */
    public function showAction($id)
    {
        $em = $this
            ->getDoctrine()
            ->getManager()
        ;

        $categories = $em
            ->getRepository('AppBundle:Category')
            ->findAll()
        ;

        $products = $em
            ->getRepository('AppBundle:Product')
            ->findAll()
        ;

        return $this->render('catalog/category.html.twig', [
            'categories' => $categories,
            'products'   => $products,
            'id'         => $id
        ]);
    }

    /**
     * @Route("product/{id}", name="product")
     */
    public function showProduct($id)
    {
        $em = $this
            ->getDoctrine()
            ->getManager()
        ;

        $categories = $em
            ->getRepository("AppBundle:Category")
            ->findAll()
        ;

        $products = $em
            ->getRepository('AppBundle:Product')
            ->findAll()
        ;

        $casings = $em
            ->getRepository('AppBundle:Casing')
            ->findAll()
        ;

        $cpus = $em
            ->getRepository('AppBundle:Cpu')
            ->findAll()
        ;

        $gpus = $em
            ->getRepository('AppBundle:Gpu')
            ->findAll()
        ;

        $motherboards = $em
            ->getRepository('AppBundle:Motherboard')
            ->findAll()
        ;

        $powers = $em
            ->getRepository('AppBundle:PowerSupply')
            ->findAll()
        ;

        $rams = $em
            ->getRepository('AppBundle:Ram')
            ->findAll()
        ;

        return $this->render('catalog/product.html.twig', [
            'categories'   => $categories,
            'products'     => $products,
            'casings'      => $casings,
            'cpus'         => $cpus,
            'gpus'         => $gpus,
            'motherboards' => $motherboards,
            'powers'       => $powers,
            'rams'         => $rams,
            'id'           => $id
        ]);
    }

    /**
     * @Route("/search", name="search_bar_result")
     */
    public function searchBarAction(Request $request)
    {
        $form = $this
            ->createFormBuilder()
            ->setMethod('GET')
            ->add('categories', EntityType::class, array(
                'class'        => 'AppBundle:Category',
                'choice_label' => 'name',
                'required'     => false,
                'placeholder'  => 'Toutes les catégories'
            ))
            ->add('search', SearchType::class)
            ->getForm()
        ;

        $em = $this
                ->getDoctrine()
                ->getManager()
        ;

        $categories = $em
            ->getRepository("AppBundle:Category")
            ->findAll()
        ;

        if ($request->isMethod('GET') && $form->handleRequest($request)->isValid()) {
            $categoryForm = $form
                ->get('categories')
                ->getData()
            ;

            $search = $form
                ->get('search')
                ->getData()
            ;

            if ($categoryForm == NULL) {
                $products = $em
                    ->getRepository('AppBundle:Product')
                    ->createQueryBuilder('p')
                    ->where('p.name LIKE :name')
                    ->setParameter('name', "%$search%")
                    ->getQuery()
                    ->getResult()
                ;
            } else {
                $products = $em
                    ->getRepository('AppBundle:Product')
                    ->createQueryBuilder('p')
                    ->where('p.name LIKE :name')
                    ->setParameter('name', "%$search%")
                    ->andWhere('p.category = :category')
                    ->setParameter('category', $categoryForm->getId())
                    ->getQuery()
                    ->getResult()
                ;
            }

            $nbResult = count($products);

            return $this->render('catalog/searchBarResult.html.twig', array(
                'categories'   => $categories,
                'products'     => $products,
                'nbResult'     => $nbResult
            ));
        }

        return $this->render('catalog/searchBarForm.html.twig', array(
            'categories'   => $categories,
            'form'         => $form->createView()
        ));
    }

    /**
     * @Route("/rgpd", name="rgpd")
     */
    public function rgpdAction(Request $request)
    {
        $em = $this
            ->getDoctrine()
            ->getManager()
        ;

        $categories = $em
            ->getRepository('AppBundle:Category')
            ->findAll()
        ;
        
        return $this->render('catalog/rgpd.html.twig', [
            'categories' => $categories
        ]);
    }
}
