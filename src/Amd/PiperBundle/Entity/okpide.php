<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * okpide
 *
 * @ORM\Table(name="okpide")
 * @ORM\Entity(repositoryClass="Amd\PiperBundle\Repository\okpideRepository")
 */
class okpide
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
     * @ORM\Column(name="centro", type="boolean")
     */
    private $centro;

    /**
     * @var string
     *
     * @ORM\Column(name="flujo", type="boolean")
     */
    private $flujo;

    /**
     * @var string
     *
     * @ORM\Column(name="item", type="boolean")
     */
    private $item;

    /**
     * @var string
     *
     * @ORM\Column(name="rut", type="boolean")
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="td1", type="boolean")
     */
    private $td1;

    /**
     * @var string
     *
     * @ORM\Column(name="doc1", type="boolean")
     */
    private $doc1;

    /**
     * @var string
     *
     * @ORM\Column(name="td2", type="boolean")
     */
    private $td2;

    /**
     * @var string
     *
     * @ORM\Column(name="doc2", type="boolean")
     */
    private $doc2;

    /**
     * @var string
     *
     * @ORM\Column(name="proyec", type="boolean")
     */
    private $proyec;

    /**
     * @var string
     *
     * @ORM\Column(name="fecven", type="boolean")
     */
    private $fecven;

    /**
     * @var string
     *
     * @ORM\Column(name="glolin", type="boolean")
     */
    private $glolin;


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
     * Set centro
     *
     * @param string $centro
     * @return okpide
     */
    public function setCentro($centro)
    {
        $this->centro = $centro;

        return $this;
    }

    /**
     * Get centro
     *
     * @return string 
     */
    public function getCentro()
    {
        return $this->centro;
    }

    /**
     * Set flujo
     *
     * @param string $flujo
     * @return okpide
     */
    public function setFlujo($flujo)
    {
        $this->flujo = $flujo;

        return $this;
    }

    /**
     * Get flujo
     *
     * @return string 
     */
    public function getFlujo()
    {
        return $this->flujo;
    }

    /**
     * Set item
     *
     * @param string $item
     * @return okpide
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return string 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set rut
     *
     * @param string $rut
     * @return okpide
     */
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    /**
     * Get rut
     *
     * @return string 
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set td1
     *
     * @param string $td1
     * @return okpide
     */
    public function setTd1($td1)
    {
        $this->td1 = $td1;

        return $this;
    }

    /**
     * Get td1
     *
     * @return string 
     */
    public function getTd1()
    {
        return $this->td1;
    }

    /**
     * Set doc1
     *
     * @param string $doc1
     * @return okpide
     */
    public function setDoc1($doc1)
    {
        $this->doc1 = $doc1;

        return $this;
    }

    /**
     * Get doc1
     *
     * @return string 
     */
    public function getDoc1()
    {
        return $this->doc1;
    }

    /**
     * Set td2
     *
     * @param string $td2
     * @return okpide
     */
    public function setTd2($td2)
    {
        $this->td2 = $td2;

        return $this;
    }

    /**
     * Get td2
     *
     * @return string 
     */
    public function getTd2()
    {
        return $this->td2;
    }

    /**
     * Set doc2
     *
     * @param string $doc2
     * @return okpide
     */
    public function setDoc2($doc2)
    {
        $this->doc2 = $doc2;

        return $this;
    }

    /**
     * Get doc2
     *
     * @return string 
     */
    public function getDoc2()
    {
        return $this->doc2;
    }

    /**
     * Set proyec
     *
     * @param string $proyec
     * @return okpide
     */
    public function setProyec($proyec)
    {
        $this->proyec = $proyec;

        return $this;
    }

    /**
     * Get proyec
     *
     * @return string 
     */
    public function getProyec()
    {
        return $this->proyec;
    }

    /**
     * Set fecven
     *
     * @param string $fecven
     * @return okpide
     */
    public function setFecven($fecven)
    {
        $this->fecven = $fecven;

        return $this;
    }

    /**
     * Get fecven
     *
     * @return string 
     */
    public function getFecven()
    {
        return $this->fecven;
    }

    /**
     * Set glolin
     *
     * @param string $glolin
     * @return okpide
     */
    public function setGlolin($glolin)
    {
        $this->glolin = $glolin;

        return $this;
    }

    /**
     * Get glolin
     *
     * @return string 
     */
    public function getGlolin()
    {
        return $this->glolin;
    }
}
