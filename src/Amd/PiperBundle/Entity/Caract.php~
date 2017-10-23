<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caract
 *
 * @ORM\Table(name="caract")
 * @ORM\Entity(repositoryClass="Amd\PiperBundle\Repository\CaractRepository")
 */
class Caract
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
     * @ORM\Column(name="empleado", type="boolean")
     */
    private $empleado;

     /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="boolean")
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="proveedor", type="boolean")
     */
    private $proveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="honorarios", type="boolean")
     */
    private $honorarios;


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
     * Set empleado
     *
     * @param string $empleado
     * @return Caract
     */
    public function setEmpleado($empleado)
    {
        $this->empleado = $empleado;

        return $this;
    }

    /**
     * Get empleado
     *
     * @return string 
     */
    public function getEmpleado()
    {
        return $this->empleado;
    }

    /**
     * Set cliente
     *
     * @param string $cliente
     * @return Caract
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
     * Set proveedor
     *
     * @param string $proveedor
     * @return Caract
     */
    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;

        return $this;
    }

    /**
     * Get proveedor
     *
     * @return string 
     */
    public function getproveedor()
    {
        return $this->proveedor;
    }

    /**
     * Set honorarios
     *
     * @param string $honorarios
     * @return Caract
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
    public function gethonorarios()
    {
        return $this->honorarios;
    }
}
