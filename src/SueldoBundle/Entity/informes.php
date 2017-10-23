<?php

namespace SueldoBundle\Entity;

use Amd\PiperBundle\Entity\Empresa;
use Doctrine\ORM\Mapping as ORM;

/**
 * informes
 *
 * @ORM\Table(name="informes")
 * @ORM\Entity(repositoryClass="SueldoBundle\Repository\informesRepository")
 */
class informes
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
     * @var \DateTime
     *
     * @ORM\Column(name="periodo", type="date")
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="archivo", type="string", length=20)
     */
    private $archivo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=4)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="filtro", type="string", length=50)
     */
    private $filtro;

    /**
     * @var string
     *
     * @ORM\Column(name="orden", type="string", length=50)
     */
    private $orden;
    
    /**
     *
     /** @ORM\ManyToOne(targetEntity="Amd\PiperBundle\Entity\Empresa") 
     */
    private $empresa;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set periodo
     *
     * @param \DateTime $periodo
     *
     * @return informes
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return \DateTime
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set archivo
     *
     * @param string $archivo
     *
     * @return informes
     */
    public function setArchivo($archivo)
    {
        $this->archivo = $archivo;

        return $this;
    }

    /**
     * Get archivo
     *
     * @return string
     */
    public function getArchivo()
    {
        return $this->archivo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return informes
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return informes
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set filtro
     *
     * @param string $filtro
     *
     * @return informes
     */
    public function setFiltro($filtro)
    {
        $this->filtro = $filtro;

        return $this;
    }

    /**
     * Get filtro
     *
     * @return string
     */
    public function getFiltro()
    {
        return $this->filtro;
    }

    /**
     * Set orden
     *
     * @param string $orden
     *
     * @return informes
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return string
     */
    public function getOrden()
    {
        return $this->orden;
    }
    
    /**
     * Set empresa
     *
     * 
     */
    public function setEmpresa(\Amd\PiperBundle\Entity\Empresa $empresa)
    {
      $this->empresa = $empresa;
    }
    
    
     /**
     * Get empresa
     *
     * 
     */
    public function getEmpresa()
    {
      return $this->empresa;
    }
}

