<?php

namespace Amd\PiperBundle\Controller;

use Amd\PiperBundle\Entity\Ingrerut;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Ingrerut controller.
 *
 * @Route("ingresorut")
 */
class IngrerutController extends Controller
{
    /**
     * Lists all ingrerut entities.
     *
     * @Route("/", name="ingresorut_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ingreruts = $em->getRepository('AmdPiperBundle:Ingrerut')->findAll();

        return $this->render('ingrerut/index.html.twig', array(
            'ingreruts' => $ingreruts,
        ));
    }

    /**
     * Creates a new ingrerut entity.
     *
     * @Route("/new", name="ingresorut_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $ingrerut = new Ingrerut();
        $form = $this->createForm('Amd\PiperBundle\Form\IngrerutType', $ingrerut);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ingrerut);
            $em->flush();

            return $this->redirectToRoute('ingresorut_index', array('id' => $ingrerut->getId()));
        }

        return $this->render('ingrerut/new.html.twig', array(
            'ingrerut' => $ingrerut,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ingrerut entity.
     *
     * @Route("/{id}", name="ingresorut_show")
     * @Method("GET")
     */
    public function showAction(Ingrerut $ingrerut)
    {
        $deleteForm = $this->createDeleteForm($ingrerut);

        return $this->render('ingrerut/show.html.twig', array(
            'ingrerut' => $ingrerut,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ingrerut entity.
     *
     * @Route("/{id}/edit", name="ingresorut_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ingrerut $ingrerut)
    {
        $deleteForm = $this->createDeleteForm($ingrerut);
        $editForm = $this->createForm('Amd\PiperBundle\Form\IngrerutType', $ingrerut);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ingresorut_index', array('id' => $ingrerut->getId()));
        }

        return $this->render('ingrerut/edit.html.twig', array(
            'ingrerut' => $ingrerut,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ingrerut entity.
     *
     * @Route("/{id}", name="ingresorut_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ingrerut $ingrerut)
    {
        $form = $this->createDeleteForm($ingrerut);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ingrerut);
            $em->flush();
        }

        return $this->redirectToRoute('ingresorut_index');
    }

    /**
     * Creates a form to delete a ingrerut entity.
     *
     * @param Ingrerut $ingrerut The ingrerut entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ingrerut $ingrerut)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ingresorut_delete', array('id' => $ingrerut->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
