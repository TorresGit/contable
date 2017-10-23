<?php

namespace Amd\PiperBundle\Controller;

use Amd\PiperBundle\Entity\Balc;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Balc controller.
 *
 * @Route("balc")
 */
class BalcController extends Controller
{
    /**
     * Lists all balc entities.
     *
     * @Route("/", name="balc_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $balcs = $em->getRepository('AmdPiperBundle:Balc')->findAll();

        return $this->render('balc/index.html.twig', array(
            'balcs' => $balcs,
        ));
    }

    /**
     * Creates a new balc entity.
     *
     * @Route("/new", name="balc_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $balc = new Balc();
        $form = $this->createForm('Amd\PiperBundle\Form\BalcType', $balc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($balc);
            $em->flush();

            return $this->redirectToRoute('balc_index', array('id' => $balc->getId()));
        }

        return $this->render('balc/new.html.twig', array(
            'balc' => $balc,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a balc entity.
     *
     * @Route("/{id}", name="balc_show")
     * @Method("GET")
     */
    public function showAction(Balc $balc)
    {
        $deleteForm = $this->createDeleteForm($balc);

        return $this->render('balc/show.html.twig', array(
            'balc' => $balc,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing balc entity.
     *
     * @Route("/{id}/edit", name="balc_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Balc $balc)
    {
        $deleteForm = $this->createDeleteForm($balc);
        $editForm = $this->createForm('Amd\PiperBundle\Form\BalcType', $balc);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('balc_index', array('id' => $balc->getId()));
        }

        return $this->render('balc/edit.html.twig', array(
            'balc' => $balc,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a balc entity.
     *
     * @Route("/{id}", name="balc_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Balc $balc)
    {
        $form = $this->createDeleteForm($balc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($balc);
            $em->flush();
        }

        return $this->redirectToRoute('balc_index');
    }

    /**
     * Creates a form to delete a balc entity.
     *
     * @param Balc $balc The balc entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Balc $balc)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('balc_delete', array('id' => $balc->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
