<?php

namespace Amd\PiperBundle\Controller;

use Amd\PiperBundle\Entity\Folisist;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Folisist controller.
 *
 * @Route("folisist")
 */
class FolisistController extends Controller
{
    /**
     * Lists all folisist entities.
     *
     * @Route("/", name="folisist_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $folisists = $em->getRepository('AmdPiperBundle:Folisist')->findAll();

        return $this->render('folisist/index.html.twig', array(
            'folisists' => $folisists,
        ));
    }

    /**
     * Creates a new folisist entity.
     *
     * @Route("/new", name="folisist_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $folisist = new Folisist();
        $form = $this->createForm('Amd\PiperBundle\Form\FolisistType', $folisist);
        $form->handleRequest($request);
  

        if ($form->isSubmitted() && $form->isValid()) {

        /////////Inicio  obteniendo cantidad de entrada por fecha //////////
        $fecha=$folisist->getFecha();
        $mes = (string)$fecha->format('m');
        $conn= $this->get('database_connection');
        $query= " SELECT COUNT(id) AS cantidad " 
                ." FROM folisist f "
                ." WHERE MONTH(f.fecha)= '$mes' ";
        $cantEntradas=$conn->fetchAll($query);
        $codigo= array_pop($cantEntradas);
        if($codigo['cantidad'] > 0){
            $codigo=$codigo['cantidad']+1;
        }
        else {
            $codigo=1;
        }
            
        $strcod="".$codigo;    
        $cod_ceros="";
        while((strlen($cod_ceros)+strlen($strcod))<4){
            $cod_ceros=$cod_ceros."0";
        }    
        $codigo=$cod_ceros.$strcod;
              
        /////////Fin  obteniendo cantidad de entrada por fecha //////////

            $em = $this->getDoctrine()->getManager();
            $folisist->setCodvou($codigo);
            $em->persist($folisist);
            $em->flush();

            return $this->redirectToRoute('folisist_index', array('id' => $folisist->getId()));
        }

        return $this->render('folisist/new.html.twig', array(
            'folisist' => $folisist,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a folisist entity.
     *
     * @Route("/{id}", name="folisist_show")
     * @Method("GET")
     */
    public function showAction(Folisist $folisist)
    {
        $deleteForm = $this->createDeleteForm($folisist);

        return $this->render('folisist/show.html.twig', array(
            'folisist' => $folisist,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing folisist entity.
     *
     * @Route("/{id}/edit", name="folisist_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Folisist $folisist)
    {
        $deleteForm = $this->createDeleteForm($folisist);
        $editForm = $this->createForm('Amd\PiperBundle\Form\FolisistType', $folisist);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('folisist_edit', array('id' => $folisist->getId()));
        }

        return $this->render('folisist/edit.html.twig', array(
            'folisist' => $folisist,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a folisist entity.
     *
     * @Route("/{id}", name="folisist_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Folisist $folisist)
    {
        $form = $this->createDeleteForm($folisist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($folisist);
            $em->flush();
        }

        return $this->redirectToRoute('folisist_index');
    }

    /**
     * Creates a form to delete a folisist entity.
     *
     * @param Folisist $folisist The folisist entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Folisist $folisist)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('folisist_delete', array('id' => $folisist->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
}

