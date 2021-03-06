<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Voucompra
 *
 * @ORM\Table(name="voucompra")
 * @ORM\Entity
 */
class Voucompra
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idVoucompra", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Ingrerut", inversedBy="voucompra", cascade={"persist"})
     * @ORM\JoinColumn(name="Ingrerut_id", referencedColumnName="id", nullable=false)
     */
    private $Ingrerut;



    /**
     * @ORM\ManyToOne(targetEntity="Amd\PiperBundle\Entity\Plan" ,inversedBy="voucompra")
     * @ORM\JoinColumn(name="plan_id", referencedColumnName="id", nullable=false)
     */
    protected $Plan;

   

     /**
     * @ORM\ManyToOne(targetEntity="Tipovou")
     * @ORM\JoinColumn(name="tipovou_id", referencedColumnName="id", nullable=false)
     */
    protected $Tipovou;



    /**
     * @var string
     *
     * @ORM\Column(name="codvou", type="string", length=255)
     */
    private $codvou;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle", type="string", length=255)
     */
    private $detalle;

    /**
     * @var string
     *
     * @ORM\Column(name="numdocu", type="string", length=255)
     */
    private $numdocu;

   

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechaven", type="date")
     */
    private $fechaven;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fecharecep", type="date")
     */
    private $fecharecep;

    /**
     * @var string
     *
     * @ORM\Column(name="debe", type="string", length=255)
     */
    private $debe;

    /**
     * @var string
     *
     * @ORM\Column(name="haber", type="string", length=255)
     */
    private $haber;

    /**
     * @var string
     *
     * @ORM\Column(name="saldo", type="string", length=255)
     */
    private $saldo;

    /**
     * @var string
     *
     * @ORM\Column(name="numoreden", type="string", length=255)
     */
    private $numoreden;


    /**
     * Get idvoucompra
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codvou
     *
     * @param string $codvou
     * @return Voucompra
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Voucompra
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \Date
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set detalle
     *
     * @param string $detalle
     * @return Voucompra
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string 
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set numdocu
     *
     * @param string $numdocu
     * @return Voucompra
     */
    public function setNumdocu($numdocu)
    {
        $this->numdocu = $numdocu;

        return $this;
    }

    /**
     * Get numdocu
     *
     * @return string 
     */
    public function getNumdocu()
    {
        return $this->numdocu;
    }

    

    /**
     * Set fechaven
     *
     * @param \Date $fechaven
     * @return Voucompra
     */
    public function setFechaven($fechaven)
    {
        $this->fechaven = $fechaven;

        return $this;
    }

    /**
     * Get fechaven
     *
     * @return \Date 
     */
    public function getFechaven()
    {
        return $this->fechaven;
    }

    /**
     * Set fecharecep
     *
     * @param \Date $fecharecep
     * @return Voucompra
     */
    public function setFecharecep($fecharecep)
    {
        $this->fecharecep = $fecharecep;

        return $this;
    }

    /**
     * Get fecharecep
     *
     * @return \Date
     */
    public function getFecharecep()
    {
        return $this->fecharecep;
    }

    /**
     * Set debe
     *
     * @param string $debe
     * @return Voucompra
     */
    public function setDebe($debe)
    {
        $this->debe = $debe;

        return $this;
    }

    /**
     * Get debe
     *
     * @return string 
     */
    public function getDebe()
    {
        return $this->debe;
    }

    /**
     * Set haber
     *
     * @param string $haber
     * @return Voucompra
     */
    public function setHaber($haber)
    {
        $this->haber = $haber;

        return $this;
    }

    /**
     * Get haber
     *
     * @return string 
     */
    public function getHaber()
    {
        return $this->haber;
    }

    /**
     * Set saldo
     *
     * @param string $saldo
     * @return Voucompra
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return string 
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set numoreden
     *
     * @param string $numoreden
     * @return Voucompra
     */
    public function setNumoreden($numoreden)
    {
        $this->numoreden = $numoreden;

        return $this;
    }

    /**
     * Get numoreden
     *
     * @return string 
     */
    public function getNumoreden()
    {
        return $this->numoreden;
    }



     /**
     * Set Plan
     *
     * @param \Amd\PiperBundle\Entity\Plan $plan
     * @return Voucompra
     */
    public function setPlan(\Amd\PiperBundle\Entity\Plan $plan)
    {
        $this->Plan = $plan;

        return $this;
    }

    /**
     * Get Plan
     *
     * @return \Amd\PiperBundle\Entity\Plan
     */
    public function getPlan()
    {
        return $this->Plan;
    }

    /**
     * Set Tipovou
     *
     * @param \Amd\PiperBundle\Entity\Tipovou $tipovou
     * @return Voucompra
     */
    public function setTipovou(\Amd\PiperBundle\Entity\Tipovou $tipovou)
    {
        $this->Tipovou = $tipovou;

        return $this;
    }

    /**
     * Get Tipovou
     *
     * @return \Amd\PiperBundle\Entity\Tipovou
     */
    public function getTipovou()
    {
        return $this->Tipovou;
    }


     

     public function __toString()
    {   
        return $this->detalle;
    }


    /**
     * Set Ingrerut
     *
     * @param \Amd\PiperBundle\Entity\Ingrerut $ingrerut
     * @return Voucompra
     */
    public function setIngrerut(\Amd\PiperBundle\Entity\Ingrerut $ingrerut)
    {
        $this->Ingrerut = $ingrerut;

        return $this;
    }

    /**
     * Get Ingrerut
     *
     * @return \Amd\PiperBundle\Entity\Ingrerut 
     */
    public function getIngrerut()
    {
        return $this->Ingrerut;
    }





}
