<?php

namespace Amd\PiperBundle\Controller;

use Amd\PiperBundle\Entity\Tiposvoucher;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tiposvoucher controller.
 *
 * @Route("tiposvoucher")
 */
class TiposvoucherController extends Controller
{
    /**
     * Lists all tiposvoucher entities.
     *
     * @Route("/", name="tiposvoucher_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tiposvouchers = $em->getRepository('AmdPiperBundle:Tiposvoucher')->findAll();

        return $this->render('tiposvoucher/index.html.twig', array(
            'tiposvouchers' => $tiposvouchers,
        ));
    }

    /**
     * Creates a new tiposvoucher entity.
     *
     * @Route("/new", name="tiposvoucher_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tiposvoucher = new Tiposvoucher();
        $form = $this->createForm('Amd\PiperBundle\Form\TiposvoucherType', $tiposvoucher);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tiposvoucher);
            $em->flush();

            return $this->redirectToRoute('tiposvoucher_index', array('id' => $tiposvoucher->getId()));
        }

        return $this->render('tiposvoucher/new.html.twig', array(
            'tiposvoucher' => $tiposvoucher,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tiposvoucher entity.
     *
     * @Route("/{id}", name="tiposvoucher_show")
     * @Method("GET")
     */
    public function showAction(Tiposvoucher $tiposvoucher)
    {
        $deleteForm = $this->createDeleteForm($tiposvoucher);

        return $this->render('tiposvoucher/show.html.twig', array(
            'tiposvoucher' => $tiposvoucher,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tiposvoucher entity.
     *
     * @Route("/{id}/edit", name="tiposvoucher_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tiposvoucher $tiposvoucher)
    {
        $deleteForm = $this->createDeleteForm($tiposvoucher);
        $editForm = $this->createForm('Amd\PiperBundle\Form\TiposvoucherType', $tiposvoucher);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tiposvoucher_index', array('id' => $tiposvoucher->getId()));
        }

        return $this->render('tiposvoucher/edit.html.twig', array(
            'tiposvoucher' => $tiposvoucher,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tiposvoucher entity.
     *
     * @Route("/{id}", name="tiposvoucher_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tiposvoucher $tiposvoucher)
    {
        $form = $this->createDeleteForm($tiposvoucher);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tiposvoucher);
            $em->flush();
        }

        return $this->redirectToRoute('tiposvoucher_index');
    }

    /**
     * Creates a form to delete a tiposvoucher entity.
     *
     * @param Tiposvoucher $tiposvoucher The tiposvoucher entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tiposvoucher $tiposvoucher)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tiposvoucher_delete', array('id' => $tiposvoucher->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
