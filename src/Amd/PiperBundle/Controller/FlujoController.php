<?php

namespace Amd\PiperBundle\Controller;

use Amd\PiperBundle\Entity\Flujo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Flujo controller.
 *
 * @Route("flujoefec")
 */
class FlujoController extends Controller
{
    /**
     * Lists all flujo entities.
     *
     * @Route("/", name="flujoefec_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $flujos = $em->getRepository('AmdPiperBundle:Flujo')->findAll();

        return $this->render('flujo/index.html.twig', array(
            'flujos' => $flujos,
        ));
    }

    /**
     * Creates a new flujo entity.
     *
     * @Route("/new", name="flujoefec_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $flujo = new Flujo();
        $form = $this->createForm('Amd\PiperBundle\Form\FlujoType', $flujo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($flujo);
            $em->flush();

            return $this->redirectToRoute('flujoefec_index', array('id' => $flujo->getId()));
        }

        return $this->render('flujo/new.html.twig', array(
            'flujo' => $flujo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a flujo entity.
     *
     * @Route("/{id}", name="flujoefec_show")
     * @Method("GET")
     */
    public function showAction(Flujo $flujo)
    {
        $deleteForm = $this->createDeleteForm($flujo);

        return $this->render('flujo/show.html.twig', array(
            'flujo' => $flujo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing flujo entity.
     *
     * @Route("/{id}/edit", name="flujoefec_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Flujo $flujo)
    {
        $deleteForm = $this->createDeleteForm($flujo);
        $editForm = $this->createForm('Amd\PiperBundle\Form\FlujoType', $flujo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('flujoefec_index', array('id' => $flujo->getId()));
        }

        return $this->render('flujo/edit.html.twig', array(
            'flujo' => $flujo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a flujo entity.
     *
     * @Route("/{id}", name="flujoefec_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Flujo $flujo)
    {
        $form = $this->createDeleteForm($flujo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($flujo);
            $em->flush();
        }

        return $this->redirectToRoute('flujoefec_index');
    }

    /**
     * Creates a form to delete a flujo entity.
     *
     * @param Flujo $flujo The flujo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Flujo $flujo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('flujoefec_delete', array('id' => $flujo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
