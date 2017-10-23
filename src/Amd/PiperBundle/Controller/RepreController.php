<?php

namespace Amd\PiperBundle\Controller;

use Amd\PiperBundle\Entity\Repre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Repre controller.
 *
 * @Route("reprempresa")
 */
class RepreController extends Controller
{
    /**
     * Lists all repre entities.
     *
     * @Route("/", name="reprempresa_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $repres = $em->getRepository('AmdPiperBundle:Repre')->findAll();

        return $this->render('repre/index.html.twig', array(
            'repres' => $repres,
        ));
    }

    /**
     * Creates a new repre entity.
     *
     * @Route("/new", name="reprempresa_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $repre = new Repre();
        $form = $this->createForm('Amd\PiperBundle\Form\RepreType', $repre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($repre);
            $em->flush();

            return $this->redirectToRoute('reprempresa_show', array('id' => $repre->getId()));
        }

        return $this->render('repre/new.html.twig', array(
            'repre' => $repre,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a repre entity.
     *
     * @Route("/{id}", name="reprempresa_show")
     * @Method("GET")
     */
    public function showAction(Repre $repre)
    {
        $deleteForm = $this->createDeleteForm($repre);

        return $this->render('repre/show.html.twig', array(
            'repre' => $repre,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing repre entity.
     *
     * @Route("/{id}/edit", name="reprempresa_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Repre $repre)
    {
        $deleteForm = $this->createDeleteForm($repre);
        $editForm = $this->createForm('Amd\PiperBundle\Form\RepreType', $repre);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reprempresa_edit', array('id' => $repre->getId()));
        }

        return $this->render('repre/edit.html.twig', array(
            'repre' => $repre,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a repre entity.
     *
     * @Route("/{id}", name="reprempresa_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Repre $repre)
    {
        $form = $this->createDeleteForm($repre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($repre);
            $em->flush();
        }

        return $this->redirectToRoute('reprempresa_index');
    }

    /**
     * Creates a form to delete a repre entity.
     *
     * @param Repre $repre The repre entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Repre $repre)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reprempresa_delete', array('id' => $repre->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
