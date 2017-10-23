<?php

namespace SueldoBundle\Entity;

use Amd\PiperBundle\Entity\Empresa;
use Doctrine\ORM\Mapping as ORM;

/**
 * suedep
 *
 * @ORM\Table(name="suedep")
 * @ORM\Entity(repositoryClass="SueldoBundle\Repository\suedepRepository")
 */
class suedep
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
     * @ORM\Column(name="codigo", type="string", length=2)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="descrip", type="string", length=15)
     */
    private $descrip;
    
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
     * @return suedep
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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return suedep
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     *
     * @return suedep
     */
    public function setDescrip($descrip)
    {
        $this->descrip = $descrip;

        return $this;
    }

    /**
     * Get descrip
     *
     * @return string
     */
    public function getDescrip()
    {
        return $this->descrip;
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


