<?php

namespace SueldoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * seuisa
 *
 * @ORM\Table(name="seuisa")
 * @ORM\Entity(repositoryClass="SueldoBundle\Repository\seuisaRepository")
 */
class seuisa
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
     * @ORM\Column(name="codisa", type="string", length=2)
     */
    private $codisa;

    /**
     * @var string
     *
     * @ORM\Column(name="gloisa", type="string", length=20)
     */
    private $gloisa;

    /**
     * @var string
     *
     * @ORM\Column(name="rutisapre", type="string", length=10)
     */
    private $rutisapre;

    /**
     * @var string
     *
     * @ORM\Column(name="previsapre", type="string", length=2)
     */
    private $previsapre;

    /**
     * @var int
     *
     * @ORM\Column(name="psalud", type="integer")
     */
    private $psalud;


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
     * @return seuisa
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
     * Set codisa
     *
     * @param string $codisa
     *
     * @return seuisa
     */
    public function setCodisa($codisa)
    {
        $this->codisa = $codisa;

        return $this;
    }

    /**
     * Get codisa
     *
     * @return string
     */
    public function getCodisa()
    {
        return $this->codisa;
    }

    /**
     * Set gloisa
     *
     * @param string $gloisa
     *
     * @return seuisa
     */
    public function setGloisa($gloisa)
    {
        $this->gloisa = $gloisa;

        return $this;
    }

    /**
     * Get gloisa
     *
     * @return string
     */
    public function getGloisa()
    {
        return $this->gloisa;
    }

    /**
     * Set rutisapre
     *
     * @param string $rutisapre
     *
     * @return seuisa
     */
    public function setRutisapre($rutisapre)
    {
        $this->rutisapre = $rutisapre;

        return $this;
    }

    /**
     * Get rutisapre
     *
     * @return string
     */
    public function getRutisapre()
    {
        return $this->rutisapre;
    }

    /**
     * Set previsapre
     *
     * @param string $previsapre
     *
     * @return seuisa
     */
    public function setPrevisapre($previsapre)
    {
        $this->previsapre = $previsapre;

        return $this;
    }

    /**
     * Get previsapre
     *
     * @return string
     */
    public function getPrevisapre()
    {
        return $this->previsapre;
    }

    /**
     * Set psalud
     *
     * @param integer $psalud
     *
     * @return seuisa
     */
    public function setPsalud($psalud)
    {
        $this->psalud = $psalud;

        return $this;
    }

    /**
     * Get psalud
     *
     * @return int
     */
    public function getPsalud()
    {
        return $this->psalud;
    }
}

