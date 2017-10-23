<?php

namespace SueldoBundle\Entity;

use Amd\PiperBundle\Entity\Empresa;
use Doctrine\ORM\Mapping as ORM;

/**
 * suecargos
 *
 * @ORM\Table(name="suecargos")
 * @ORM\Entity(repositoryClass="SueldoBundle\Repository\suecargosRepository")
 */
class suecargos
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
     * @ORM\Column(name="cargo", type="string", length=5)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="dcargo", type="string", length=35)
     */
    private $dcargo;

    /**
     * @var int
     *
     * @ORM\Column(name="cantcargo", type="integer")
     */
    private $cantcargo;

    /**
     * @var float
     *
     * @ORM\Column(name="promsueldo", type="float")
     */
    private $promsueldo;

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
     * @return suecargos
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
     * Set cargo
     *
     * @param string $cargo
     *
     * @return suecargos
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set dcargo
     *
     * @param string $dcargo
     *
     * @return suecargos
     */
    public function setDcargo($dcargo)
    {
        $this->dcargo = $dcargo;

        return $this;
    }

    /**
     * Get dcargo
     *
     * @return string
     */
    public function getDcargo()
    {
        return $this->dcargo;
    }

    /**
     * Set cantcargo
     *
     * @param integer $cantcargo
     *
     * @return suecargos
     */
    public function setCantcargo($cantcargo)
    {
        $this->cantcargo = $cantcargo;

        return $this;
    }

    /**
     * Get cantcargo
     *
     * @return int
     */
    public function getCantcargo()
    {
        return $this->cantcargo;
    }

    /**
     * Set promsueldo
     *
     * @param float $promsueldo
     *
     * @return suecargos
     */
    public function setPromsueldo($promsueldo)
    {
        $this->promsueldo = $promsueldo;

        return $this;
    }

    /**
     * Get promsueldo
     *
     * @return float
     */
    public function getPromsueldo()
    {
        return $this->promsueldo;
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

