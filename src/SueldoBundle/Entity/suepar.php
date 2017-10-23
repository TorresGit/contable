<?php

namespace SueldoBundle\Entity;

use Amd\PiperBundle\Entity\Empresa;
use Doctrine\ORM\Mapping as ORM;

/**
 * suepar
 *
 * @ORM\Table(name="suepar")
 * @ORM\Entity(repositoryClass="SueldoBundle\Repository\sueparRepository")
 */
class suepar
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
     * @ORM\Column(name="codpar", type="string", length=2)
     */
    private $codpar;

    /**
     * @var string
     *
     * @ORM\Column(name="glopar", type="string", length=20)
     */
    private $glopar;

    /**
     * @var float
     *
     * @ORM\Column(name="valpar", type="float")
     */
    private $valpar;

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
     * @return suepar
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
     * Set codpar
     *
     * @param string $codpar
     *
     * @return suepar
     */
    public function setCodpar($codpar)
    {
        $this->codpar = $codpar;

        return $this;
    }

    /**
     * Get codpar
     *
     * @return string
     */
    public function getCodpar()
    {
        return $this->codpar;
    }

    /**
     * Set glopar
     *
     * @param string $glopar
     *
     * @return suepar
     */
    public function setGlopar($glopar)
    {
        $this->glopar = $glopar;

        return $this;
    }

    /**
     * Get glopar
     *
     * @return string
     */
    public function getGlopar()
    {
        return $this->glopar;
    }

    /**
     * Set valpar
     *
     * @param float $valpar
     *
     * @return suepar
     */
    public function setValpar($valpar)
    {
        $this->valpar = $valpar;

        return $this;
    }

    /**
     * Get valpar
     *
     * @return float
     */
    public function getValpar()
    {
        return $this->valpar;
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

