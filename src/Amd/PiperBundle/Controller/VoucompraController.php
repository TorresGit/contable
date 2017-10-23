<?php

namespace Amd\PiperBundle\Controller;

use Amd\PiperBundle\Entity\Voucompra;
use Amd\PiperBundle\Form\VoucompraType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Voucompra controller.
 *
 * @Route("voucompra")
 */
class VoucompraController extends Controller
{
    /**
     * Lists all voucompra entities.
     *
     * @Route("/", name="voucompra_index")
     * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request)
    {
        $voucompra=new Voucompra();
        $em = $this->getDoctrine()->getManager();
        $voucompras = $em->getRepository('AmdPiperBundle:Voucompra')->findAll();
        $form = $this->createForm(new VoucompraType(), $voucompra);
        $form->handleRequest($request);
        if ($form->isValid()){
            $voucompra->setCodvou(1);// eso es para q pueda insertar aqui va el codigo real que se genera
            $em->persist($voucompra);
            $em->flush();

            return $this->redirect($this->generateUrl('voucompra_index'));
        }

        return $this->render('voucompra/index.html.twig', array(
        'voucompras' => $voucompras,
        'form' => $form->createView(),

    ));
    }



    /**
     * Lists all voucompra entities.
     *
     * @Route("/duplicate/{id}/", name="voucompra_duplicate")
     */
    public function duplicateAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $voucompra = new Voucompra();
        $voucompras = $em->getRepository('AmdPiperBundle:Voucompra')->find($id);

        $voucompra->setCodvou($voucompras->getCodvou());
        $voucompra->setDebe($voucompras->getDebe());
        $voucompra->setDetalle($voucompras->getDetalle());
        $voucompra->setFecha($voucompras->getFecha());
        $voucompra->setFecharecep($voucompras->getFecharecep());
        $voucompra->setHaber($voucompras->getHaber());
        $voucompra->setFechaven($voucompras->getFechaven());
       // $voucompra->setIdtiposvoucher($voucompras->getIdtiposvoucher());
        $voucompra->setIngrerut($voucompras->getIngrerut());
        $voucompra->setNumdocu($voucompras->getNumdocu());
        $voucompra->setSaldo($voucompras->getSaldo());
        $voucompra->setNumoreden($voucompras->getNumoreden());
        $voucompra->setPlan($voucompras->getPlan());
        $voucompra->setTipovou($voucompras->getTipovou());


        $em->persist($voucompra);
        $em->flush();
        return new JsonResponse($voucompra->getId());
    }

    /**
     * Creates a new voucompra entity.
     *
     * @Route("/new", name="voucompra_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $voucompra = new Voucompra();
        $form = $this->createForm('Amd\PiperBundle\Form\VoucompraType', $voucompra);
        $form->handleRequest($request);




        if ($form->isSubmitted() && $form->isValid()) {

      /////////Inicio  obteniendo cantidad de entrada por fecha //////////
        $fecha=$voucompra->getFecha();
        $mes = (string)$fecha->format('m');
        $conn= $this->get('database_connection');
        $query= " SELECT COUNT(idvoucompra) AS cantidad "
                ." FROM voucompra f "
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
            $voucompra->setCodvou($codigo);
            $em->persist($voucompra);
            $em->flush();

            return $this->redirectToRoute('voucompra_show', array('id' => $voucompra->getId()));
        }

        return $this->render('voucompra/new.html.twig', array(
            'voucompra' => $voucompra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a voucompra entity.
     *
     * @Route("/{id}", name="voucompra_show")
     * @Method("GET")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $voucompra = $em->getRepository('AmdPiperBundle:Voucompra')->find($id);
        return $this->render('voucompra/show.html.twig', array( 'voucompra' => $voucompra ));
    }

    /**
     * Displays a form to edit an existing voucompra entity.
     *
     * @Route("/edit/{id}", name="voucompra_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $voucompra = $em->getRepository('AmdPiperBundle:Voucompra')->find($id);
        $form = $this->createForm(new VoucompraType(), $voucompra);
        $form->handleRequest($request);
        if ($form->isValid()){
            $em->persist($voucompra);
            $em->flush();

            return $this->redirect($this->generateUrl('voucompra_index'));


        }
        return $this->render(':voucompra:edit.html.twig', array(
            'form' => $form->createView(),
            'voucompra' => $voucompra
        ));






    }

    /**
     * Deletes a voucompra entity.
     *
     * @Route("/delete/{id}", name="voucompra_delete")
     * @Method("POST")
     */
    public function deleteAction($id)
    {

            $em = $this->getDoctrine()->getManager();
            $voucompra=$em->getRepository('AmdPiperBundle:Voucompra')->find($id);
            $em->remove($voucompra);
            $em->flush();
            return new JsonResponse($id);// respuesta json con el id para ajax para borrar la fila

    }

    /**
     * Creates a form to delete a voucompra entity.
     *
     * @param Voucompra $voucompra The voucompra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Voucompra $voucompra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('voucompra_delete', array('id' => $voucompra->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
