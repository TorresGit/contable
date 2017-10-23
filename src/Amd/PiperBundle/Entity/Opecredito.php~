<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opecredito
 *
 * @ORM\Table(name="opecredito")
 * @ORM\Entity(repositoryClass="Amd\PiperBundle\Repository\OpecreditoRepository")
 */
class Opecredito
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
     * @ORM\ManyToOne(targetEntity="Banco")
     * @ORM\JoinColumn(name="tipovou_id", referencedColumnName="id", nullable=false)
     */
    protected $Banco;

    /**
     * @var string
     *
     * @ORM\Column(name="codoperacion", type="string", length=255)
     */
    private $codoperacion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="monto", type="string", length=255)
     */
    private $monto;

    /**
     * @var string
     *
     * @ORM\Column(name="numcuotas", type="string", length=255)
     */
    private $numcuotas;

    /**
     * @var bool
     *
     * @ORM\Column(name="okvigente", type="boolean")
     */
    private $okvigente;


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
     * Set codoperacion
     *
     * @param string $codoperacion
     * @return Opecredito
     */
    public function setCodoperacion($codoperacion)
    {
        $this->codoperacion = $codoperacion;

        return $this;
    }

    /**
     * Get codoperacion
     *
     * @return string 
     */
    public function getCodoperacion()
    {
        return $this->codoperacion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Opecredito
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Opecredito
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set monto
     *
     * @param string $monto
     * @return Opecredito
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return string 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set numcuotas
     *
     * @param string $numcuotas
     * @return Opecredito
     */
    public function setNumcuotas($numcuotas)
    {
        $this->numcuotas = $numcuotas;

        return $this;
    }

    /**
     * Get numcuotas
     *
     * @return string 
     */
    public function getNumcuotas()
    {
        return $this->numcuotas;
    }

    /**
     * Set okvigente
     *
     * @param boolean $okvigente
     * @return Opecredito
     */
    public function setOkvigente($okvigente)
    {
        $this->okvigente = $okvigente;

        return $this;
    }

    /**
     * Get okvigente
     *
     * @return boolean 
     */
    public function getOkvigente()
    {
        return $this->okvigente;
    }

    /**
     * Set Banco
     *
     * @param \Amd\PiperBundle\Entity\Banco $banco
     * @return Banco
     */
    public function setBanco(\Amd\PiperBundle\Entity\Banco $banco)
    {
        $this->Banco = $banco;

        return $this;
    }

    /**
     * Get Banco
     *
     * @return \Amd\PiperBundle\Entity\Banco 
     */
    public function getBanco()
    {
        return $this->Banco;
    }

     public function __toString() {

        return $this->descripcion;
    }
}
