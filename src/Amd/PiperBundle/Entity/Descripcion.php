<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Descripcion
 *
 * @ORM\Table(name="descripcion")
 * @ORM\Entity(repositoryClass="Amd\PiperBundle\Repository\DescripcionRepository")
 */
class Descripcion
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
     * @ORM\ManyToOne(targetEntity="Tipovou")
     * @ORM\JoinColumn(name="tipovou_id", referencedColumnName="id", nullable=false)
     */
    protected $Tipovou;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Descripcion
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
     * Set Tipovou
     *
     * @param \Amd\PiperBundle\Entity\Tipovou $tipovou
     * @return Tipovou
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

     public function __toString() {

        return $this->nombre;
    }
}
