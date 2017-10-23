<?php

namespace Amd\PiperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Componenet\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\Security\Core\SecurityContext;

class PortadaController extends ContainerAware
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('AmdPiperBundle:Default:portada.html.twig');
    }
}
