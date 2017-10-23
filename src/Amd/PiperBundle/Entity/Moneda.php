<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Moneda
 *
 * @ORM\Table(name="moneda")
 * @ORM\Entity(repositoryClass="Amd\PiperBundle\Repository\MonedaRepository")
 */
class Moneda
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
     * @ORM\Column(name="fecha", type="string", length=255)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=255)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="tipom", type="string", length=1 , nullable=false)
     * @Assert\Choice(choices={"$","U.F","U$$","Euro"}, message="Debe seleccionar la moneda")
     */
    private $tipom;

    


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
     * @param string $fecha
     * @return Moneda
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return string 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return Moneda
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set tipom
     *
     * @param string $tipom
     * @return Moneda
     */
    public function setTipom($tipom)
    {
        $this->tipom = $tipom;

        return $this;
    }

    /**
     * Get tipom
     *
     * @return string 
     */
    public function getTipom()
    {
        return $this->tipom;
    }

   
}
