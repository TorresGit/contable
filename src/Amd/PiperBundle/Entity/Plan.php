<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plan
 *
 * @ORM\Table(name="plan")
 * @ORM\Entity(repositoryClass="Amd\PiperBundle\Repository\PlanRepository")
 */
class Plan
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
     * @ORM\ManyToOne(targetEntity="Balc")
     * @ORM\JoinColumn(name="empresa_id", referencedColumnName="id", nullable=false)
     */
    protected $Balc;

      /**
     * @var string
     *
     * @ORM\Column(name="numcuenta", type="string", length=255)
     */
    private $numcuenta;

      /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="presup", type="string", length=255)
     */
    private $presup;


    /**
     * @var string
     *
     * @ORM\Column(name="informe", type="string", length=255)
     */
    private $informe;

    /**
     * @var bool
     *
     * @ORM\Column(name="exento", type="boolean")
     */
    private $exento;

    /**
     * @var bool
     *
     * @ORM\Column(name="afecto", type="boolean")
     */
    private $afecto;

    /**
     * @var bool
     *
     * @ORM\Column(name="iva", type="boolean")
     */
    private $iva;

    /**
     * @var bool
     *
     * @ORM\Column(name="ivat", type="boolean")
     */
    private $ivat;

    /**
     * @var bool
     *
     * @ORM\Column(name="impesp", type="boolean")
     */
    private $impesp;

    /**
     * @var bool
     *
     * @ORM\Column(name="rethon", type="boolean")
     */
    private $rethon;

    /**
     * @var bool
     *
     * @ORM\Column(name="arut", type="boolean")
     */
    private $arut;

    /**
     * @var bool
     *
     * @ORM\Column(name="oprcredit", type="boolean")
     */
    private $oprcredit;

    /**
     * @var bool
     *
     * @ORM\Column(name="concilia", type="boolean")
     */
    private $concilia;

    /**
     * @var bool
     *
     * @ORM\Column(name="flujo", type="boolean")
     */
    private $flujo;

    /**
     * @var bool
     *
     * @ORM\Column(name="ccosto", type="boolean")
     */
    private $ccosto;

    /**
     * @var bool
     *
     * @ORM\Column(name="item", type="boolean")
     */
    private $item;

    /**
     * @var bool
     *
     * @ORM\Column(name="grafica", type="boolean")
     */
    private $grafica;

    /**
     * @var bool
     *
     * @ORM\Column(name="aproyecto", type="boolean")
     */
    private $aproyecto;

    /**
     * @var bool
     *
     * @ORM\Column(name="tesorero", type="boolean")
     */
    private $tesorero;

    /**
     * @var string
     *
     * @ORM\Column(name="egresos", type="string", length=255)
     */
    private $egresos;

    /**
     * @var string
     *
     * @ORM\Column(name="rinicio", type="string", length=255)
     */
    private $rinicio;

    /**
     * @var string
     *
     * @ORM\Column(name="rfin", type="string", length=255)
     */
    private $rfin;

    /**
     * @var bool
     *
     * @ORM\Column(name="cmdifcamdio", type="boolean")
     */
    private $cmdifcamdio;

    /**
     * @var bool
     *
     * @ORM\Column(name="cmctasresul", type="boolean")
     */
    private $cmctasresul;

    /**
     * @var string
     *
     * @ORM\Column(name="contradifcam", type="string", length=255)
     */
    private $contradifcam;

    /**
     * @var string
     *
     * @ORM\Column(name="ctaresul", type="string", length=255)
     */
    private $ctaresul;


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
     * Set presup
     *
     * @param string $presup
     * @return Plan
     */
    public function setPresup($presup)
    {
        $this->presup = $presup;

        return $this;
    }

    /**
     * Get presup
     *
     * @return string 
     */
    public function getPresup()
    {
        return $this->presup;
    }

    /**
     * Set numcuenta
     *
     * @param string $numcuenta
     * @return Plan
     */
    public function setNumcuenta($numcuenta)
    {
        $this->numcuenta= $numcuenta;

        return $this;
    }

    /**
     * Get numcuenta
     *
     * @return string 
     */
    public function getNumcuenta()
    {
        return $this->numcuenta;
    }


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Plan
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion= $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }


    
    

    /**
     * Set informe
     *
     * @param string $informe
     * @return Plan
     */
    public function setInforme($informe)
    {
        $this->informe = $informe;

        return $this;
    }

    /**
     * Get informe
     *
     * @return string 
     */
    public function getInforme()
    {
        return $this->informe;
    }

    /**
     * Set exento
     *
     * @param boolean $exento
     * @return Plan
     */
    public function setExento($exento)
    {
        $this->exento = $exento;

        return $this;
    }

    /**
     * Get exento
     *
     * @return boolean 
     */
    public function getExento()
    {
        return $this->exento;
    }

    /**
     * Set afecto
     *
     * @param boolean $afecto
     * @return Plan
     */
    public function setAfecto($afecto)
    {
        $this->afecto = $afecto;

        return $this;
    }

    /**
     * Get afecto
     *
     * @return boolean 
     */
    public function getAfecto()
    {
        return $this->afecto;
    }

    /**
     * Set iva
     *
     * @param boolean $iva
     * @return Plan
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return boolean 
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set ivat
     *
     * @param boolean $ivat
     * @return Plan
     */
    public function setIvat($ivat)
    {
        $this->ivat = $ivat;

        return $this;
    }

    /**
     * Get ivat
     *
     * @return boolean 
     */
    public function getIvat()
    {
        return $this->ivat;
    }

    /**
     * Set impesp
     *
     * @param boolean $impesp
     * @return Plan
     */
    public function setImpesp($impesp)
    {
        $this->impesp = $impesp;

        return $this;
    }

    /**
     * Get impesp
     *
     * @return boolean 
     */
    public function getImpesp()
    {
        return $this->impesp;
    }

    /**
     * Set rethon
     *
     * @param boolean $rethon
     * @return Plan
     */
    public function setRethon($rethon)
    {
        $this->rethon = $rethon;

        return $this;
    }

    /**
     * Get rethon
     *
     * @return boolean 
     */
    public function getRethon()
    {
        return $this->rethon;
    }

    /**
     * Set arut
     *
     * @param boolean $arut
     * @return Plan
     */
    public function setArut($arut)
    {
        $this->arut = $arut;

        return $this;
    }

    /**
     * Get arut
     *
     * @return boolean
     */
    public function getArut()
    {
        return $this->arut;
    }

    /**
     * Set oprcredit
     *
     * @param boolean $oprcredit
     * @return Plan
     */
    public function setOprcredit($oprcredit)
    {
        $this->oprcredit = $oprcredit;

        return $this;
    }

    /**
     * Get oprcredit
     *
     * @return boolean 
     */
    public function getOprcredit()
    {
        return $this->oprcredit;
    }

    /**
     * Set concilia
     *
     * @param boolean $concilia
     * @return Plan
     */
    public function setConcilia($concilia)
    {
        $this->concilia = $concilia;

        return $this;
    }

    /**
     * Get concilia
     *
     * @return boolean 
     */
    public function getConcilia()
    {
        return $this->concilia;
    }

    /**
     * Set flujo
     *
     * @param boolean $flujo
     * @return Plan
     */
    public function setFlujo($flujo)
    {
        $this->flujo = $flujo;

        return $this;
    }

    /**
     * Get flujo
     *
     * @return boolean 
     */
    public function getFlujo()
    {
        return $this->flujo;
    }

    /**
     * Set ccosto
     *
     * @param boolean $ccosto
     * @return Plan
     */
    public function setCcosto($ccosto)
    {
        $this->ccosto = $ccosto;

        return $this;
    }

    /**
     * Get ccosto
     *
     * @return boolean 
     */
    public function getCcosto()
    {
        return $this->ccosto;
    }

    /**
     * Set item
     *
     * @param boolean $item
     * @return Plan
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return string 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set grafica
     *
     * @param boolean $grafica
     * @return Plan
     */
    public function setGrafica($grafica)
    {
        $this->grafica = $grafica;

        return $this;
    }

    /**
     * Get grafica
     *
     * @return boolean 
     */
    public function getGrafica()
    {
        return $this->grafica;
    }

    /**
     * Set aproyecto
     *
     * @param boolean $aproyecto
     * @return Plan
     */
    public function setAproyecto($aproyecto)
    {
        $this->aproyecto = $aproyecto;

        return $this;
    }

    /**
     * Get aproyecto
     *
     * @return boolean 
     */
    public function getAproyecto()
    {
        return $this->aproyecto;
    }

    /**
     * Set tesorero
     *
     * @param boolean $tesorero
     * @return Plan
     */
    public function setTesorero($tesorero)
    {
        $this->tesorero = $tesorero;

        return $this;
    }

    /**
     * Get tesorero
     *
     * @return boolean 
     */
    public function getTesorero()
    {
        return $this->tesorero;
    }

    /**
     * Set egresos
     *
     * @param boolean $egresos
     * @return Plan
     */
    public function setEgresos($egresos)
    {
        $this->egresos = $egresos;

        return $this;
    }

    /**
     * Get egresos
     *
     * @return string 
     */
    public function getEgresos()
    {
        return $this->egresos;
    }

    /**
     * Set rinicio
     *
     * @param string $rinicio
     * @return Plan
     */
    public function setRinicio($rinicio)
    {
        $this->rinicio = $rinicio;

        return $this;
    }

    /**
     * Get rinicio
     *
     * @return string 
     */
    public function getRinicio()
    {
        return $this->rinicio;
    }

    /**
     * Set rfin
     *
     * @param string $rfin
     * @return Plan
     */
    public function setRfin($rfin)
    {
        $this->rfin = $rfin;

        return $this;
    }

    /**
     * Get rfin
     *
     * @return string 
     */
    public function getRfin()
    {
        return $this->rfin;
    }

    /**
     * Set cmdifcamdio
     *
     * @param boolean $cmdifcamdio
     * @return Plan
     */
    public function setCmdifcamdio($cmdifcamdio)
    {
        $this->cmdifcamdio = $cmdifcamdio;

        return $this;
    }

    /**
     * Get cmdifcamdio
     *
     * @return boolean 
     */
    public function getCmdifcamdio()
    {
        return $this->cmdifcamdio;
    }

    /**
     * Set cmctasresul
     *
     * @param boolean $cmctasresul
     * @return Plan
     */
    public function setCmctasresul($cmctasresul)
    {
        $this->cmctasresul = $cmctasresul;

        return $this;
    }

    /**
     * Get cmctasresul
     *
     * @return boolean 
     */
    public function getCmctasresul()
    {
        return $this->cmctasresul;
    }

    /**
     * Set contradifcam
     *
     * @param string $contradifcam
     * @return Plan
     */
    public function setContradifcam($contradifcam)
    {
        $this->contradifcam = $contradifcam;

        return $this;
    }

    /**
     * Get contradifcam
     *
     * @return string 
     */
    public function getContradifcam()
    {
        return $this->contradifcam;
    }

    /**
     * Set ctaresul
     *
     * @param string $ctaresul
     * @return Plan
     */
    public function setCtaresul($ctaresul)
    {
        $this->ctaresul = $ctaresul;

        return $this;
    }

    /**
     * Get ctaresul
     *
     * @return string 
     */
    public function getCtaresul()
    {
        return $this->ctaresul;
    }

    /**
     * Set Empresa
     *
     * @param \Amd\PiperBundle\Entity\Empresa $empresa
     * @return Empresa
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

    /**
     * Set Balc
     *
     * @param \Amd\PiperBundle\Entity\Balc $balc
     * @return Balc
     */
    public function setBalc(\Amd\PiperBundle\Entity\Balc $balc)
    {
        $this->Balc = $balc;

        return $this;
    }

    /**
     * Get Balc
     *
     * @return \Amd\PiperBundle\Entity\Balc 
     */
    public function getBalc()
    {
        return $this->Balc;
    }

     public function __toString()
    {   
        return $this->numcuenta;
    }
}
