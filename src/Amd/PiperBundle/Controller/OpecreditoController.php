<?php

namespace Amd\PiperBundle\Controller;

use Amd\PiperBundle\Entity\Opecredito;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Opecredito controller.
 *
 * @Route("opecredito")
 */
class OpecreditoController extends Controller
{
    /**
     * Lists all opecredito entities.
     *
     * @Route("/", name="opecredito_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $opecreditos = $em->getRepository('AmdPiperBundle:Opecredito')->findAll();

        return $this->render('opecredito/index.html.twig', array(
            'opecreditos' => $opecreditos,
        ));
    }

    /**
     * Creates a new opecredito entity.
     *
     * @Route("/new", name="opecredito_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $opecredito = new Opecredito();
        $form = $this->createForm('Amd\PiperBundle\Form\OpecreditoType', $opecredito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($opecredito);
            $em->flush();

            return $this->redirectToRoute('opecredito_index', array('id' => $opecredito->getId()));
        }

        return $this->render('opecredito/new.html.twig', array(
            'opecredito' => $opecredito,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a opecredito entity.
     *
     * @Route("/{id}", name="opecredito_show")
     * @Method("GET")
     */
    public function showAction(Opecredito $opecredito)
    {
        $deleteForm = $this->createDeleteForm($opecredito);

        return $this->render('opecredito/show.html.twig', array(
            'opecredito' => $opecredito,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing opecredito entity.
     *
     * @Route("/{id}/edit", name="opecredito_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Opecredito $opecredito)
    {
        $deleteForm = $this->createDeleteForm($opecredito);
        $editForm = $this->createForm('Amd\PiperBundle\Form\OpecreditoType', $opecredito);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('opecredito_index', array('id' => $opecredito->getId()));
        }

        return $this->render('opecredito/edit.html.twig', array(
            'opecredito' => $opecredito,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a opecredito entity.
     *
     * @Route("/{id}", name="opecredito_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Opecredito $opecredito)
    {
        $form = $this->createDeleteForm($opecredito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($opecredito);
            $em->flush();
        }

        return $this->redirectToRoute('opecredito_index');
    }

    /**
     * Creates a form to delete a opecredito entity.
     *
     * @param Opecredito $opecredito The opecredito entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Opecredito $opecredito)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('opecredito_delete', array('id' => $opecredito->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
