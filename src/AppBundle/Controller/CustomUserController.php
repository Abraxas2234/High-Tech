<?php

namespace AppBundle\Controller;

<<<<<<< HEAD
use AppBundle\Entity\Clients;
use AppBundle\Entity\Delivery;
use AppBundle\Entity\Billing;
=======
use AppBundle\Entity\Billing;
use AppBundle\Entity\Client;
use AppBundle\Entity\Delivery;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
>>>>>>> searchbar
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class CustomUserController extends Controller
{
    /**
     * @Route("/user/", name="user")
     */
    public function indexAction(Request $request)
    {
<<<<<<< HEAD
<<<<<<< refs/remotes/origin/master
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('AppBundle:Categorie')
        ->findAll();
        $clients = $em->getRepository('AppBundle:Clients')
        ->findAll();
        $deliveries = $em->getRepository('AppBundle:Delivery')
        ->findAll();
        $billings = $em->getRepository('AppBundle:Billing')
        ->findAll();
=======
=======
>>>>>>> searchbar
        $em = $this
            ->getDoctrine()
            ->getManager()
        ;

<<<<<<< HEAD
        $categories = $em
=======
        $listCategories = $em
>>>>>>> searchbar
            ->getRepository('AppBundle:Category')
            ->findAll()
        ;

<<<<<<< HEAD
        $client = $em
=======
        $detailsClient = $em
>>>>>>> searchbar
            ->getRepository('AppBundle:Client')
            ->findAll()
        ;

<<<<<<< HEAD
        $deliveries = $em
=======
        $listDeliveries = $em
>>>>>>> searchbar
            ->getRepository('AppBundle:Delivery')
            ->findAll()
        ;

<<<<<<< HEAD
        $billings = $em
=======
        $listBillings = $em
>>>>>>> searchbar
            ->getRepository('AppBundle:Billing')
            ->findAll()
        ;

<<<<<<< HEAD
>>>>>>> errors correction

=======
>>>>>>> searchbar
        $user = $this->getUser();

        /*
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        */

        return $this->render('user/index.html.twig', [
<<<<<<< HEAD
            'categories' => $categories,
            'user'       => $user,
            'clients'    => $client,
            'deliveries' => $deliveries,
            'billings'   => $billings
=======
            'listCategories' => $listCategories,
            'user'           => $user,
            'detailsClient'  => $detailsClient,
            'listDeliveries' => $listDeliveries,
            'listBillings'   => $listBillings
>>>>>>> searchbar
        ]);
    }
<<<<<<< refs/remotes/origin/master

    /**
     * Creates a new delivery entity.
     *
     * @Route("delivery/new", name="delivery_new")
     * @Method({"GET", "POST"})
     */
    public function newDeliveryAction(Request $request)
    {
        $delivery = new Delivery();
        $form = $this->createForm('AppBundle\Form\DeliveryType', $delivery);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $this->getUser();
            $tempId = $user->getId();
            $delivery->setUserId($tempId);
            $em->persist($delivery);
            $em->flush();

            return $this->redirectToRoute('user');
        }

        return $this->render('delivery/new.html.twig', array(
            'delivery' => $delivery,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new billing entity.
     *
     * @Route("billing/new", name="billing_new")
     * @Method({"GET", "POST"})
     */
    public function newBillingAction(Request $request)
    {
        $billing = new Billing();
        $form = $this->createForm('AppBundle\Form\BillingType', $billing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $this->getUser();
            $tempId = $user->getId();
            $billing->setUserId($tempId);
            $em->persist($billing);
            $em->flush();

            return $this->redirectToRoute('user');
        }

        return $this->render('billing/new.html.twig', array(
            'billing' => $billing,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing client entity.
     *
     * @Route("user/{clientId}/edit", name="clients_edit")
     * @Method({"GET", "POST"})
     */
    public function editClientAction(Request $request, Clients $client)
    {
        $editForm = $this->createForm('AppBundle\Form\ClientsType', $client);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('clients_edit', array('clientId' => $client->getClientid()));
        }

        return $this->render('clients/edit.html.twig', array(
            'client' => $client,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing delivery entity.
     *
     * @Route("delivery/{deliveryId}/edit", name="delivery_edit")
     * @Method({"GET", "POST"})
     */
    public function editDeliveryAction(Request $request, Delivery $delivery)
    {
        $editForm = $this->createForm('AppBundle\Form\DeliveryType', $delivery);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user');
        }

        return $this->render('delivery/edit.html.twig', array(
            'delivery' => $delivery,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing billing entity.
     *
     * @Route("billing/{billingId}/edit", name="billing_edit")
     * @Method({"GET", "POST"})
     */
    public function editBillingAction(Request $request, Billing $billing)
    {
        $editForm = $this->createForm('AppBundle\Form\BillingType', $billing);
        $editForm->handleRequest($request);

<<<<<<< HEAD
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
=======
    /**
     * Creates a new delivery entity.
     *
     * @Route("delivery/new", name="delivery_new")
     * @Method({"GET", "POST"})
     */
    public function newDeliveryAction(Request $request)
    {
        $em = $this
            ->getDoctrine()
            ->getManager()
        ;

        $listCategories = $em
            ->getRepository('AppBundle:Category')
            ->findAll()
        ;

        $delivery = new Delivery();
        $form     = $this->createForm('AppBundle\Form\DeliveryType', $delivery);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user   = $this->getUser();
            $tempId = $user->getId();

            $delivery->setUser($tempId);
            $em->persist($delivery);
            $em->flush();

            return $this->redirectToRoute('user');
        }

        return $this->render('delivery/new.html.twig', array(
            'listCategories' => $listCategories,
            'delivery'       => $delivery,
            'form'           => $form->createView()
        ));
    }

    /**
     * Creates a new billing entity.
     *
     * @Route("billing/new", name="billing_new")
     * @Method({"GET", "POST"})
     */
    public function newBillingAction(Request $request)
    {
        $em = $this
            ->getDoctrine()
            ->getManager()
        ;

        $listCategories = $em
            ->getRepository('AppBundle:Category')
            ->findAll()
        ;

        $billing = new Billing();
        $form    = $this->createForm('AppBundle\Form\BillingType', $billing);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user   = $this->getUser();
            $tempId = $user->getId();

            $billing->setUser($tempId);
            $em->persist($billing);
            $em->flush();

            return $this->redirectToRoute('user');
        }

        return $this->render('billing/new.html.twig', array(
            'listCategories' => $listCategories,
            'billing'        => $billing,
            'form'           => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing client entity.
     *
     * @Route("user/{id}/edit", name="client_edit")
     * @Method({"GET", "POST"})
     * @ParamConverter("client", class="AppBundle:Client")
     */
    public function editClientAction(Request $request, client $client)
    {
        $em = $this
            ->getDoctrine()
            ->getManager()
        ;

        $listCategories = $em
            ->getRepository('AppBundle:Category')
            ->findAll()
        ;

        $editForm = $this->createForm('AppBundle\Form\ClientType', $client);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this
                ->getDoctrine()
                ->getManager()
                ->flush()
            ;

            return $this->redirectToRoute('client_edit', array(
                'id' => $client->getId()
            ));
        }

        return $this->render('client/edit.html.twig', array(
            'listCategories' => $listCategories,
            'client'         => $client,
            'edit_form'      => $editForm->createView()
        ));
    }

    /**
     * Displays a form to edit an existing delivery entity.
     *
     * @Route("delivery/{id}/edit", name="delivery_edit")
     * @Method({"GET", "POST"})
     * @ParamConverter("delivery", class="AppBundle:Delivery")
     */
    public function editDeliveryAction(Request $request, Delivery $delivery)
    {
        $em = $this
            ->getDoctrine()
            ->getManager()
        ;

        $listCategories = $em
            ->getRepository('AppBundle:Category')
            ->findAll()
        ;

        $editForm = $this->createForm('AppBundle\Form\DeliveryType', $delivery);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this
                ->getDoctrine()
                ->getManager()
                ->flush()
            ;

            return $this->redirectToRoute('user');
        }

        return $this->render('delivery/edit.html.twig', array(
            'listCategories' => $listCategories,
            'delivery'       => $delivery,
            'edit_form'      => $editForm->createView()
        ));
    }

    /**
     * Displays a form to edit an existing billing entity.
     *
     * @Route("billing/{id}/edit", name="billing_edit")
     * @Method({"GET", "POST"})
     * @ParamConverter("billing", class="AppBundle:Billing")
     */
    public function editBillingAction(Request $request, Billing $billing)
    {

        $em = $this
            ->getDoctrine()
            ->getManager()
        ;

        $listCategories = $em
            ->getRepository('AppBundle:Category')
            ->findAll()
        ;

        $editForm = $this->createForm('AppBundle\Form\BillingType', $billing);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this
                ->getDoctrine()
                ->getManager()
                ->flush()
            ;
>>>>>>> searchbar

            return $this->redirectToRoute('user');
        }

        return $this->render('billing/edit.html.twig', array(
<<<<<<< HEAD
            'billing' => $billing,
            'edit_form' => $editForm->createView(),
=======
            'listCategories' => $listCategories,
            'billing'        => $billing,
            'edit_form'      => $editForm->createView()
>>>>>>> searchbar
        ));
    }

    /**
     * Deletes a client entity.
     *
<<<<<<< HEAD
     * @Route("user/{clientId}/nuke", name="nuke_user")
=======
     * @Route("user/{id}/nuke", name="nuke_user")
>>>>>>> searchbar
     * @Method({"DELETE", "GET"})
     */
    public function NukeUserAction(Request $request)
    {
        $user = $this->getUser();
<<<<<<< HEAD
        $id = $user->getId();
        $em = $this->getDoctrine()->getManager();

        $client = $em->getRepository('AppBundle:Clients')->find($id);
        $delivery = $em->getRepository('AppBundle:Delivery')
        ->createQueryBuilder('d')
        ->where('d.userId LIKE :userId')
        ->setParameter('userId', $id)
        ->getQuery()
        ->getResult();

        $billing = $em->getRepository('AppBundle:Billing')
        ->createQueryBuilder('b')
        ->where('b.userId LIKE :userId')
        ->setParameter('userId', $id)
        ->getQuery()
        ->getResult();

        if (!$client) {
            throw $this->createNotFoundException('Unable to find Client.');
        }

        $em->remove($client);
        $em->remove($delivery['0']);
        $em->remove($billing['0']);
=======
        $id   = $user->getId();

        $em = $this
            ->getDoctrine()
            ->getManager()
        ;

        $client = $em
            ->getRepository('AppBundle:Client')
            ->find($id)
        ;

        if (!$client) {
            throw $this->createNotFoundException("Impossible de trouver l'utilisateur.");
        }
        
        $delivery = $em
            ->getRepository('AppBundle:Delivery')
            ->createQueryBuilder('d')
            ->where('d.user LIKE :user')
            ->setParameter('user', $id)
            ->getQuery()
            ->getResult()
        ;

        $billing = $em
            ->getRepository('AppBundle:Billing')
            ->createQueryBuilder('b')
            ->where('b.user LIKE :user')
            ->setParameter('user', $id)
            ->getQuery()
            ->getResult()
        ;

        $em->remove($client);

        if (isset($delivery['0'])) {
            $em->remove($delivery['0']);
        }

        if (isset($billing['0'])) {
            $em->remove($billing['0']);
        }

>>>>>>> searchbar
        $em->remove($user);
        $em->flush();

        return $this->redirectToRoute('catalog');
    }
<<<<<<< HEAD
=======
>>>>>>> method get form
=======
>>>>>>> searchbar
}
