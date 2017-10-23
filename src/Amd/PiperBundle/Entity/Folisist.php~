<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Folisist
 *
 * @ORM\Table(name="folisist")
 * @ORM\Entity(repositoryClass="Amd\PiperBundle\Repository\FolisistRepository")
 */
class Folisist
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    
    /**
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumn(name="empresa_id", referencedColumnName="id", nullable=false)
     */
    protected $Empresa;

    /**
     * @var Datetime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="codvou", type="string", length=255)
     */
    private $codvou;

    /**
     * @var string
     *
     * @ORM\Column(name="codcompra", type="string", length=255)
     */
    private $codcompra;

    /**
     * @var string
     *
     * @ORM\Column(name="entidad", type="string", length=255)
     */
    private $entidad;

    /**
     * @var string
     *
     * @ORM\Column(name="opetesore", type="string", length=255)
     */
    private $opetesore;


    /**
     * @var string
     *
     * @ORM\Column(name="ivacredito", type="string", length=255)
     */
    private $ivacredito;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedores", type="string", length=255)
     */
    private $proveedores;

    /**
     * @var string
     *
     * @ORM\Column(name="retimphon", type="string", length=255)
     */
    private $retimphon;

    /**
     * @var string
     *
     * @ORM\Column(name="honorarios", type="string", length=255)
     */
    private $honorarios;

    /**
     * @var string
     *
     * @ORM\Column(name="ivadebito", type="string", length=255)
     */
    private $ivadebito;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=255)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="ivaretenido", type="string", length=255)
     */
    private $ivaretenido;

    /**
     * @var string
     *
     * @ORM\Column(name="bancocheques", type="string", length=255)
     */
    private $bancocheques;


    /**
     * @var string
     *
     * @ORM\Column(name="nopedido", type="string", length=255)
     */
    private $nopedido;

    /**
     * @var string
     *
     * @ORM\Column(name="nofactura", type="string", length=255)
     */
    private $nofactura;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \Datetime $fecha
     * @return Folisist
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \Datetime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set codvou
     *
     * @param string $codvou
     * @return Folisist
     */
    public function setCodvou($codvou)
    {
        
        $fechaCod = date ("ym");
        if($fechaCod!=null)
            return $this->codvou= $fechaCod.$codvou;
        else 
            return $this->codvou = $codvou;       
    }

    /**
     * Get codvou
     *
     * @return string 
     */
    public function getCodvou()
    {
        return $this->codvou;
    }

    /**
     * Set codcompra
     *
     * @param string $codcompra
     * @return Folisist
     */
    public function setCodcompra($codcompra)
    {
        $this->codcompra = $codcompra;

        return $this;
    }

    /**
     * Get codcompra
     *
     * @return string 
     */
    public function getCodcompra()
    {
        return $this->codcompra;
    }

    /**
     * Set entidad
     *
     * @param string $entidad
     * @return Folisist
     */
    public function setEntidad($entidad)
    {
        $this->entidad = $entidad;

        return $this;
    }

    /**
     * Get entidad
     *
     * @return string 
     */
    public function getEntidad()
    {
        return $this->entidad;
    }

    /**
     * Set opetesore
     *
     * @param string $opetesore
     * @return Folisist
     */
    public function setOpetesore($opetesore)
    {
        $this->opetesore = $opetesore;

        return $this;
    }

    /**
     * Get opetesore
     *
     * @return string 
     */
    public function getOpetesore()
    {
        return $this->opetesore;
    }


    /**
     * Set ivacredito
     *
     * @param string $ivacredito
     * @return Folisist
     */
    public function setIvacredito($ivacredito)
    {
        $this->ivacredito = $ivacredito;

        return $this;
    }

    /**
     * Get ivacredito
     *
     * @return string 
     */
    public function getIvacredito()
    {
        return $this->ivacredito;
    }

    /**
     * Set proveedores
     *
     * @param string $proveedores
     * @return Folisist
     */
    public function setProveedores($proveedores)
    {
        $this->proveedores = $proveedores;

        return $this;
    }

    /**
     * Get proveedores
     *
     * @return string 
     */
    public function getProveedores()
    {
        return $this->proveedores;
    }

    /**
     * Set retimphon
     *
     * @param string $retimphon
     * @return Folisist
     */
    public function setRetimphon($retimphon)
    {
        $this->retimphon = $retimphon;

        return $this;
    }

    /**
     * Get retimphon
     *
     * @return string 
     */
    public function getRetimphon()
    {
        return $this->retimphon;
    }

    /**
     * Set honorarios
     *
     * @param string $honorarios
     * @return Folisist
     */
    public function setHonorarios($honorarios)
    {
        $this->honorarios = $honorarios;

        return $this;
    }

    /**
     * Get honorarios
     *
     * @return string 
     */
    public function getHonorarios()
    {
        return $this->honorarios;
    }

    /**
     * Set ivadebito
     *
     * @param string $ivadebito
     * @return Folisist
     */
    public function setIvadebito($ivadebito)
    {
        $this->ivadebito = $ivadebito;

        return $this;
    }

    /**
     * Get ivadebito
     *
     * @return string 
     */
    public function getIvadebito()
    {
        return $this->ivadebito;
    }

    /**
     * Set cliente
     *
     * @param string $cliente
     * @return Folisist
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set ivaretenido
     *
     * @param string $ivaretenido
     * @return Folisist
     */
    public function setIvaretenido($ivaretenido)
    {
        $this->ivaretenido = $ivaretenido;

        return $this;
    }

    /**
     * Get ivaretenido
     *
     * @return string 
     */
    public function getIvaretenido()
    {
        return $this->ivaretenido;
    }

    /**
     * Set bancocheques
     *
     * @param string $bancocheques
     * @return Folisist
     */
    public function setBancocheques($bancocheques)
    {
        $this->bancocheques = $bancocheques;

        return $this;
    }

    /**
     * Get bancocheques
     *
     * @return string 
     */
    public function getBancocheques()
    {
        return $this->bancocheques;
    }

     /**
     * Set nopedido
     *
     * @param string $nopedido
     * @return Folisist
     */
    public function setNopedido($nopedido)
    {
        $this->nopedido = $nopedido;

        return $this;
    }

    /**
     * Get nopedido
     *
     * @return string 
     */
    public function getNopedido()
    {
        return $this->nopedido;
    }

    /**
     * Set nofactura
     *
     * @param string $nofactura
     * @return Folisist
     */
    public function setNofactura($nofactura)
    {
        $this->nofactura = $nofactura;

        return $this;
    }

    /**
     * Get nofactura
     *
     * @return string 
     */
    public function getNofactura()
    {
        return $this->nofactura;
    }

    
    /**
     * Set Empresa
     *
     * @param \Amd\PiperBundle\Entity\Empresa $empresa
     * @return Folisist
     */
    public function setEmpresa(\Amd\PiperBundle\Entity\Empresa $empresa)
    {
        $this->Empresa = $empresa;

        return $this;
    }

    /**
     * Get Empresa
     *
     * @return \Amd\PiperBundle\Entity\Empresa
     */
    public function getEmpresa()
    {
        return $this->Empresa;
    }

    public function __toString()
    {   
        return $this->entidad;
    }
}
