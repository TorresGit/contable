<?php

namespace Amd\PiperBundle\Controller;

use Amd\PiperBundle\Entity\Descripcion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Descripcion controller.
 *
 * @Route("tiposdocumentos")
 */
class DescripcionController extends Controller
{
    /**
     * Lists all descripcion entities.
     *
     * @Route("/", name="tiposdocumentos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $descripcions = $em->getRepository('AmdPiperBundle:Descripcion')->findAll();

        return $this->render('AmdPiperBundle:Descripcion:index.html.twig', array(
            'descripcions' => $descripcions,
        ));
    }

    /**
     * Creates a new descripcion entity.
     *
     * @Route("/new", name="tiposdocumentos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $descripcion = new Descripcion();
        $form = $this->createForm('Amd\PiperBundle\Form\DescripcionType', $descripcion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($descripcion);
            $em->flush();

            return $this->redirectToRoute('tiposdocumentos_index', array('id' => $descripcion->getId()));
        }

        return $this->render('AmdPiperBundle:Descripcion:new.html.twig', array(
            'descripcion' => $descripcion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a descripcion entity.
     *
     * @Route("/{id}", name="tiposdocumentos_show")
     * @Method("GET")
     */
    public function showAction(Descripcion $descripcion)
    {
        $deleteForm = $this->createDeleteForm($descripcion);

        return $this->render('AmdPiperBundle:Descripcion:show.html.twig', array(
            'descripcion' => $descripcion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing descripcion entity.
     *
     * @Route("/{id}/edit", name="tiposdocumentos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Descripcion $descripcion)
    {
        $deleteForm = $this->createDeleteForm($descripcion);
        $editForm = $this->createForm('Amd\PiperBundle\Form\DescripcionType', $descripcion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tiposdocumentos_index', array('id' => $descripcion->getId()));
        }

        return $this->render('AmdPiperBundle:Descripcion:edit.html.twig', array(
            'descripcion' => $descripcion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a descripcion entity.
     *
     * @Route("/{id}", name="tiposdocumentos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Descripcion $descripcion)
    {
        $form = $this->createDeleteForm($descripcion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($descripcion);
            $em->flush();
        }

        return $this->redirectToRoute('tiposdocumentos_index');
    }

    /**
     * Creates a form to delete a descripcion entity.
     *
     * @param Descripcion $descripcion The descripcion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Descripcion $descripcion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tiposdocumentos_delete', array('id' => $descripcion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
