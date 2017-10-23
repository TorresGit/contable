<?php

namespace SueldoBundle\Entity;

use Amd\PiperBundle\Entity\Empresa;
use Doctrine\ORM\Mapping as ORM;

/**
 * tabcla
 *
 * @ORM\Table(name="tabcla")
 * @ORM\Entity(repositoryClass="SueldoBundle\Repository\tabclaRepository")
 */
class tabcla
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
     * @ORM\Column(name="clave", type="string", length=3)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="glosa", type="string", length=30)
     */
    private $glosa;

    /**
     * @var int
     *
     * @ORM\Column(name="valdeb", type="integer")
     */
    private $valdeb;

    /**
     * @var int
     *
     * @ORM\Column(name="valhab", type="integer")
     */
    private $valhab;
    
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
     * @return tabcla
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
     * Set clave
     *
     * @param string $clave
     *
     * @return tabcla
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set glosa
     *
     * @param string $glosa
     *
     * @return tabcla
     */
    public function setGlosa($glosa)
    {
        $this->glosa = $glosa;

        return $this;
    }

    /**
     * Get glosa
     *
     * @return string
     */
    public function getGlosa()
    {
        return $this->glosa;
    }

    /**
     * Set valdeb
     *
     * @param integer $valdeb
     *
     * @return tabcla
     */
    public function setValdeb($valdeb)
    {
        $this->valdeb = $valdeb;

        return $this;
    }

    /**
     * Get valdeb
     *
     * @return int
     */
    public function getValdeb()
    {
        return $this->valdeb;
    }

    /**
     * Set valhab
     *
     * @param integer $valhab
     *
     * @return tabcla
     */
    public function setValhab($valhab)
    {
        $this->valhab = $valhab;

        return $this;
    }

    /**
     * Get valhab
     *
     * @return int
     */
    public function getValhab()
    {
        return $this->valhab;
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

