<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Balc
 *
 * @ORM\Table(name="balc")
 * @ORM\Entity(repositoryClass="Amd\PiperBundle\Repository\BalcRepository")
 */
class Balc
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
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="debebal", type="string", length=255)
     */
    private $debebal;

    /**
     * @var string
     *
     * @ORM\Column(name="haberbal", type="string", length=255)
     */
    private $haberbal;

    /**
     * @var string
     *
     * @ORM\Column(name="saldo", type="string", length=255)
     */
    private $saldo;


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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Balc
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
     * Set debebal
     *
     * @param string $debebal
     * @return Balc
     */
    public function setDebebal($debebal)
    {
        $this->debebal = $debebal;

        return $this;
    }

    /**
     * Get debebal
     *
     * @return string 
     */
    public function getDebebal()
    {
        return $this->debebal;
    }

    /**
     * Set haberbal
     *
     * @param string $haberbal
     * @return Balc
     */
    public function setHaberbal($haberbal)
    {
        $this->haberbal = $haberbal;

        return $this;
    }

    /**
     * Get haberbal
     *
     * @return string 
     */
    public function getHaberbal()
    {
        return $this->haberbal;
    }

    /**
     * Set saldo
     *
     * @param string $saldo
     * @return Balc
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

    public function __toString()
    {   
        return $this->descripcion;
    }
}
