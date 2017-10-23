<?php

namespace Amd\PiperBundle\Controller;

use Amd\PiperBundle\Entity\Tclave;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tclave controller.
 *
 * @Route("centrocosto")
 */
class TclaveController extends Controller
{
    /**
     * Lists all tclave entities.
     *
     * @Route("/", name="centrocosto_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tclaves = $em->getRepository('AmdPiperBundle:Tclave')->findAll();

        return $this->render('tclave/index.html.twig', array(
            'tclaves' => $tclaves,
        ));
    }

    /**
     * Creates a new tclave entity.
     *
     * @Route("/new", name="centrocosto_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tclave = new Tclave();
        $form = $this->createForm('Amd\PiperBundle\Form\TclaveType', $tclave);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tclave);
            $em->flush();

            return $this->redirectToRoute('centrocosto_index', array('id' => $tclave->getId()));
        }

        return $this->render('tclave/new.html.twig', array(
            'tclave' => $tclave,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tclave entity.
     *
     * @Route("/{id}", name="centrocosto_show")
     * @Method("GET")
     */
    public function showAction(Tclave $tclave)
    {
        $deleteForm = $this->createDeleteForm($tclave);

        return $this->render('tclave/show.html.twig', array(
            'tclave' => $tclave,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tclave entity.
     *
     * @Route("/{id}/edit", name="centrocosto_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tclave $tclave)
    {
        $deleteForm = $this->createDeleteForm($tclave);
        $editForm = $this->createForm('Amd\PiperBundle\Form\TclaveType', $tclave);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('centrocosto_index', array('id' => $tclave->getId()));
        }

        return $this->render('tclave/edit.html.twig', array(
            'tclave' => $tclave,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tclave entity.
     *
     * @Route("/{id}", name="centrocosto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tclave $tclave)
    {
        $form = $this->createDeleteForm($tclave);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tclave);
            $em->flush();
        }

        return $this->redirectToRoute('centrocosto_index');
    }

    /**
     * Creates a form to delete a tclave entity.
     *
     * @param Tclave $tclave The tclave entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tclave $tclave)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('centrocosto_delete', array('id' => $tclave->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
