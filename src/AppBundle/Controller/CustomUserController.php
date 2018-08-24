<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Clients;
use AppBundle\Entity\Delivery;
use AppBundle\Entity\Billing;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

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
        $deliveries = $em->getRepository('AppBundle:Delivery')
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
            'deliveries' => $deliveries,
            'billings' => $billings
        ]);
    }

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

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user');
        }

        return $this->render('billing/edit.html.twig', array(
            'billing' => $billing,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a client entity.
     *
     * @Route("user/{clientId}/nuke", name="nuke_user")
     * @Method({"DELETE", "GET"})
     */
    public function NukeUserAction(Request $request)
    {
        $user = $this->getUser();
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
        $em->remove($user);
        $em->flush();

        return $this->redirectToRoute('catalog');
    }
}
