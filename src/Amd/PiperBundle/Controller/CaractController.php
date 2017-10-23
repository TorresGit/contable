<?php

namespace Amd\PiperBundle\Controller;

use Amd\PiperBundle\Entity\Caract;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Caract controller.
 *
 * @Route("caract")
 */
class CaractController extends Controller
{
    /**
     * Lists all caract entities.
     *
     * @Route("/", name="caract_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $caracts = $em->getRepository('AmdPiperBundle:Caract')->findAll();

        return $this->render('caract/index.html.twig', array(
            'caracts' => $caracts,
        ));
    }

    /**
     * Creates a new caract entity.
     *
     * @Route("/new", name="caract_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $caract = new Caract();
        $form = $this->createForm('Amd\PiperBundle\Form\CaractType', $caract);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($caract);
            $em->flush();

            return $this->redirectToRoute('caract_show', array('id' => $caract->getId()));
        }

        return $this->render('caract/new.html.twig', array(
            'caract' => $caract,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a caract entity.
     *
     * @Route("/{id}", name="caract_show")
     * @Method("GET")
     */
    public function showAction(Caract $caract)
    {
        $deleteForm = $this->createDeleteForm($caract);

        return $this->render('caract/show.html.twig', array(
            'caract' => $caract,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing caract entity.
     *
     * @Route("/{id}/edit", name="caract_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Caract $caract)
    {
        $deleteForm = $this->createDeleteForm($caract);
        $editForm = $this->createForm('Amd\PiperBundle\Form\CaractType', $caract);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('caract_edit', array('id' => $caract->getId()));
        }

        return $this->render('caract/edit.html.twig', array(
            'caract' => $caract,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a caract entity.
     *
     * @Route("/{id}", name="caract_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Caract $caract)
    {
        $form = $this->createDeleteForm($caract);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($caract);
            $em->flush();
        }

        return $this->redirectToRoute('caract_index');
    }

    /**
     * Creates a form to delete a caract entity.
     *
     * @param Caract $caract The caract entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Caract $caract)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('caract_delete', array('id' => $caract->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
