<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

class CustomUserController extends Controller
{
    /**
     * @Route("/user", name="user")
     */
    public function indexAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      $categories = $em->getRepository('AppBundle:Categorie')
        ->findAll();
      $clients = $em->getRepository('AppBundle:Clients')
        ->findAll();
      $billings = $em->getRepository('AppBundle:Billing')
        ->findAll();

        $user = $this->getUser();

        /*
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
          }
        */

        return $this->render('user/index.html.twig', [
            'categories' => $categories,
            'user' => $user,
            'clients' => $clients,
            'billings' => $billings
        ]);
    }

}
