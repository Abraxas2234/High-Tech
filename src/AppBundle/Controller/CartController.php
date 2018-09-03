<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Client;
use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

class CartController extends Controller
{
    /**
     * @Route("/cart", name="cart")
     */
    public function indexAction()
    {
        $articlesNames = $_SESSION['panier']['libelleProduit'];
        $articlesQty = $_SESSION['panier']['qteProduit'];
        $articlesPrices = $_SESSION['panier']['prixProduit'];

        return $this->render('cart/index.html.twig', [
            'articlesNames' => $articlesNames,
            'articlesQty' => $articlesQty,
            'articlesPrices' => $articlesPrices
        ]);
    }

    /**
     * @Route("/product/{id}/add", name="add")
     */
    public function ajouterArticle(Product $product)
    {
        $idProduit = $product->getId();
        $libelleProduit = $product->getName();
        $qteProduit = '1';
        $prixProduit = $product->getPrice();

        //Si le panier existe
        if (isset($_SESSION['panier'])) {
            //Si le produit existe déjà on ajoute seulement la quantité
            $positionProduit = array_search($libelleProduit, $_SESSION['panier']['libelleProduit']);

            if ($positionProduit !== false) {
                $_SESSION['panier']['qteProduit'][$positionProduit] += $qteProduit ;
            } else {
                //Sinon on ajoute le produit
                array_push($_SESSION['panier']['idProduit'], $idProduit);
                array_push($_SESSION['panier']['libelleProduit'], $libelleProduit);
                array_push($_SESSION['panier']['qteProduit'], $qteProduit);
                array_push($_SESSION['panier']['prixProduit'], $prixProduit);
            }
        } else {
            echo "Un problème est survenu veuillez contacter l'administrateur du site.";
        }
        return $this->redirectToRoute('catalog');
    }

    /**
     * @Route("payment_form", name="payment")
     */
    public function showPayment()
    {
        $em = $this
            ->getDoctrine()
            ->getManager()
        ;

        $listCategories = $em
            ->getRepository('AppBundle:Category')
            ->findAll()
        ;

        return $this->render('cart/payment.html.twig', [
            'categories' => $listCategories,
            // 'form' => $form->createView()
        ]);
    }

    /**
     * @Route("delete_cart", name="cartdelete")
     */
    public function supprimePanier()
    {
        $em = $this
          ->getDoctrine()
          ->getManager()
      ;
        $listCategories = $em
          ->getRepository('AppBundle:Category')
          ->findAll()
      ;

        unset($_SESSION['panier']);
        return $this->render('catalog/index.html.twig', [
            'listCategories' => $listCategories
        ]);
    }
}
