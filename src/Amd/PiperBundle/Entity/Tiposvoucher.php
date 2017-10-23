<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiposvoucher
 *
 * @ORM\Table(name="tiposvoucher")
 * @ORM\Entity
 */
class Tiposvoucher
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTiposvoucher", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=false)
     */
    private $descripcion;






    /**
     * Get idtiposvoucher
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
     * @return Tiposvoucher
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
     public function __toString()
    {   
        return $this->getDescripcion();
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->voucompra = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add voucompra
     *
     * @param \Amd\PiperBundle\Entity\Voucompra $voucompra
     * @return Tiposvoucher
     */
    public function addVoucompra(\Amd\PiperBundle\Entity\Voucompra $voucompra)
    {
        $this->voucompra[] = $voucompra;

        return $this;
    }

    /**
     * Remove voucompra
     *
     * @param \Amd\PiperBundle\Entity\Voucompra $voucompra
     */
    public function removeVoucompra(\Amd\PiperBundle\Entity\Voucompra $voucompra)
    {
        $this->voucompra->removeElement($voucompra);
    }

    /**
     * Get voucompra
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVoucompra()
    {
        return $this->voucompra;
    }
}
