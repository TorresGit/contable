<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ventas
 *
 * @ORM\Table(name="ventas")
 * @ORM\Entity(repositoryClass="Amd\PiperBundle\Repository\VentasRepository")
 */
class Ventas
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
     * Set nopedido
     *
     * @param string $nopedido
     * @return Ventas
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
     * @return Ventas
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
}
