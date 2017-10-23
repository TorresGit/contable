<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banco
 *
 * @ORM\Table(name="banco")
 * @ORM\Entity(repositoryClass="Amd\PiperBundle\Repository\BancoRepository")
 */
class Banco
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
     * @var string
     *
     * @ORM\Column(name="numcuenta", type="string", length=255)
     */
    private $numcuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="cuentacorriente", type="string", length=255)
     */
    private $cuentacorriente;

    /**
     * @var string
     *
     * @ORM\Column(name="ejecutivo", type="string", length=255)
     */
    private $ejecutivo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="fono", type="string", length=255)
     */
    private $fono;

    /**
     * @var string
     *
     * @ORM\Column(name="sucrusal", type="string", length=255)
     */
    private $sucrusal;


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
     * Set numcuenta
     *
     * @param string $numcuenta
     * @return Banco
     */
    public function setNumcuenta($numcuenta)
    {
        $this->numcuenta = $numcuenta;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Banco
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set cuentacorriente
     *
     * @param string $cuentacorriente
     * @return Banco
     */
    public function setCuentacorriente($cuentacorriente)
    {
        $this->cuentacorriente = $cuentacorriente;

        return $this;
    }

    /**
     * Get cuentacorriente
     *
     * @return string 
     */
    public function getCuentacorriente()
    {
        return $this->cuentacorriente;
    }

     /**
     * Set ejecutivo
     *
     * @param string $ejecutivo
     * @return Banco
     */
    public function setEjecutivo($ejecutivo)
    {
        $this->ejecutivo = $ejecutivo;

        return $this;
    }

    /**
     * Get ejecutivo
     *
     * @return string 
     */
    public function getEjecutivo()
    {
        return $this->ejecutivo;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Banco
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fono
     *
     * @param string $fono
     * @return Banco
     */
    public function setFono($fono)
    {
        $this->fono = $fono;

        return $this;
    }

    /**
     * Get fono
     *
     * @return string 
     */
    public function getFono()
    {
        return $this->fono;
    }

    /**
     * Set sucrusal
     *
     * @param string $sucrusal
     * @return Banco
     */
    public function setSucrusal($sucrusal)
    {
        $this->sucrusal = $sucrusal;

        return $this;
    }

    /**
     * Get sucrusal
     *
     * @return string 
     */
    public function getSucrusal()
    {
        return $this->sucrusal;
    }

     public function __toString() {

        return $this->nombre;
    }
}
