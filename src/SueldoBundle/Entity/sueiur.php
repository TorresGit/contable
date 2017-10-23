<?php

namespace SueldoBundle\Entity;

use Amd\PiperBundle\Entity\Empresa;
use Doctrine\ORM\Mapping as ORM;

/**
 * sueiur
 *
 * @ORM\Table(name="sueiur")
 * @ORM\Entity(repositoryClass="SueldoBundle\Repository\sueiurRepository")
 */
class sueiur
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
     * @ORM\Column(name="codiur", type="string", length=2)
     */
    private $codiur;

    /**
     * @var int
     *
     * @ORM\Column(name="pdesde", type="integer")
     */
    private $pdesde;

    /**
     * @var int
     *
     * @ORM\Column(name="phasta", type="integer")
     */
    private $phasta;

    /**
     * @var int
     *
     * @ORM\Column(name="pfactor", type="integer")
     */
    private $pfactor;

    /**
     * @var int
     *
     * @ORM\Column(name="prebaja", type="integer")
     */
    private $prebaja;

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
     * @return sueiur
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
     * Set codiur
     *
     * @param string $codiur
     *
     * @return sueiur
     */
    public function setCodiur($codiur)
    {
        $this->codiur = $codiur;

        return $this;
    }

    /**
     * Get codiur
     *
     * @return string
     */
    public function getCodiur()
    {
        return $this->codiur;
    }

    /**
     * Set pdesde
     *
     * @param integer $pdesde
     *
     * @return sueiur
     */
    public function setPdesde($pdesde)
    {
        $this->pdesde = $pdesde;

        return $this;
    }

    /**
     * Get pdesde
     *
     * @return int
     */
    public function getPdesde()
    {
        return $this->pdesde;
    }

    /**
     * Set phasta
     *
     * @param integer $phasta
     *
     * @return sueiur
     */
    public function setPhasta($phasta)
    {
        $this->phasta = $phasta;

        return $this;
    }

    /**
     * Get phasta
     *
     * @return int
     */
    public function getPhasta()
    {
        return $this->phasta;
    }

    /**
     * Set pfactor
     *
     * @param integer $pfactor
     *
     * @return sueiur
     */
    public function setPfactor($pfactor)
    {
        $this->pfactor = $pfactor;

        return $this;
    }

    /**
     * Get pfactor
     *
     * @return int
     */
    public function getPfactor()
    {
        return $this->pfactor;
    }

    /**
     * Set prebaja
     *
     * @param integer $prebaja
     *
     * @return sueiur
     */
    public function setPrebaja($prebaja)
    {
        $this->prebaja = $prebaja;

        return $this;
    }

    /**
     * Get prebaja
     *
     * @return int
     */
    public function getPrebaja()
    {
        return $this->prebaja;
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

