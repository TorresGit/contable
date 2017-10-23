<?php

namespace Amd\PiperBundle\Controller;

use Amd\PiperBundle\Entity\Contabilizar;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Contabilizar controller.
 *
 * @Route("contabilizar")
 */
class ContabilizarController extends Controller
{
    /**
     * Lists all contabilizar entities.
     *
     * @Route("/", name="contabilizar_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $contabilizars = $em->getRepository('AmdPiperBundle:Contabilizar')->findAll();

        return $this->render('AmdPiperBundle:Contabilizar:index.html.twig', array(
            'contabilizars' => $contabilizars,
        ));
    }

    /**
     * Creates a new contabilizar entity.
     *
     * @Route("/new", name="contabilizar_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $contabilizar = new Contabilizar();
        $form = $this->createForm('Amd\PiperBundle\Form\ContabilizarType', $contabilizar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contabilizar);
            $em->flush();

            return $this->redirectToRoute('contabilizar_show', array('id' => $contabilizar->getId()));
        }

        return $this->render('AmdPiperBundle:Contabilizar:new.html.twig', array(
            'contabilizar' => $contabilizar,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a contabilizar entity.
     *
     * @Route("/{id}", name="contabilizar_show")
     * @Method("GET")
     */
    public function showAction(Contabilizar $contabilizar)
    {
        $deleteForm = $this->createDeleteForm($contabilizar);

        return $this->render('AmdPiperBundle:Contabilizar:show.html.twig', array(
            'contabilizar' => $contabilizar,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing contabilizar entity.
     *
     * @Route("/{id}/edit", name="contabilizar_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Contabilizar $contabilizar)
    {
        $deleteForm = $this->createDeleteForm($contabilizar);
        $editForm = $this->createForm('Amd\PiperBundle\Form\ContabilizarType', $contabilizar);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contabilizar_edit', array('id' => $contabilizar->getId()));
        }

        return $this->render('AmdPiperBundle:Contabilizar:edit.html.twig', array(
            'contabilizar' => $contabilizar,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a contabilizar entity.
     *
     * @Route("/{id}", name="contabilizar_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Contabilizar $contabilizar)
    {
        $form = $this->createDeleteForm($contabilizar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contabilizar);
            $em->flush();
        }

        return $this->redirectToRoute('contabilizar_index');
    }

    /**
     * Creates a form to delete a contabilizar entity.
     *
     * @param Contabilizar $contabilizar The contabilizar entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Contabilizar $contabilizar)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contabilizar_delete', array('id' => $contabilizar->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
