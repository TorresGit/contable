<?php

namespace Amd\PiperBundle\Controller;

use Amd\PiperBundle\Entity\Tipovou;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tipovou controller.
 *
 * @Route("tipovou")
 */
class TipovouController extends Controller
{
    /**
     * Lists all tipovou entities.
     *
     * @Route("/", name="tipovou_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tipovous = $em->getRepository('AmdPiperBundle:Tipovou')->findAll();

        return $this->render('AmdPiperBundle:Tipovou:index.html.twig', array(
            'tipovous' => $tipovous,
        ));
    }

    /**
     * Creates a new tipovou entity.
     *
     * @Route("/new", name="tipovou_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tipovou = new Tipovou();
        $form = $this->createForm('Amd\PiperBundle\Form\TipovouType', $tipovou);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipovou);
            $em->flush();

            return $this->redirectToRoute('tipovou_index', array('id' => $tipovou->getId()));
        }

        return $this->render('AmdPiperBundle:Tipovou:new.html.twig', array(
            'tipovou' => $tipovou,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tipovou entity.
     *
     * @Route("/{id}", name="tipovou_show")
     * @Method("GET")
     */
    public function showAction(Tipovou $tipovou)
    {
        $deleteForm = $this->createDeleteForm($tipovou);

        return $this->render('AmdPiperBundle:Tipovou:show.html.twig', array(
            'tipovou' => $tipovou,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tipovou entity.
     *
     * @Route("/{id}/edit", name="tipovou_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tipovou $tipovou)
    {
        $deleteForm = $this->createDeleteForm($tipovou);
        $editForm = $this->createForm('Amd\PiperBundle\Form\TipovouType', $tipovou);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tipovou_edit', array('id' => $tipovou->getId()));
        }

        return $this->render('AmdPiperBundle:Tipovou:edit.html.twig', array(
            'tipovou' => $tipovou,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tipovou entity.
     *
     * @Route("/{id}", name="tipovou_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tipovou $tipovou)
    {
        $form = $this->createDeleteForm($tipovou);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tipovou);
            $em->flush();
        }

        return $this->redirectToRoute('tipovou_index');
    }

    /**
     * Creates a form to delete a tipovou entity.
     *
     * @param Tipovou $tipovou The tipovou entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tipovou $tipovou)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipovou_delete', array('id' => $tipovou->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
