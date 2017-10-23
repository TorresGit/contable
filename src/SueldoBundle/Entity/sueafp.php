<?php

namespace SueldoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sueafp
 *
 * @ORM\Table(name="sueafp")
 * @ORM\Entity(repositoryClass="SueldoBundle\Repository\sueafpRepository")
 */
class sueafp
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
     * @ORM\Column(name="codafp", type="string", length=2)
     */
    private $codafp;

    /**
     * @var string
     *
     * @ORM\Column(name="rutafp", type="string", length=10)
     */
    private $rutafp;

    /**
     * @var string
     *
     * @ORM\Column(name="gloafp", type="string", length=20)
     */
    private $gloafp;

    /**
     * @var string
     *
     * @ORM\Column(name="prevafp", type="string", length=2)
     */
    private $prevafp;

    /**
     * @var int
     *
     * @ORM\Column(name="pvejez", type="integer")
     */
    private $pvejez;

    /**
     * @var int
     *
     * @ORM\Column(name="pseguro", type="integer")
     */
    private $pseguro;

    /**
     * @var int
     *
     * @ORM\Column(name="pcomision", type="integer")
     */
    private $pcomision;


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
     * @return sueafp
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
     * Set codafp
     *
     * @param string $codafp
     *
     * @return sueafp
     */
    public function setCodafp($codafp)
    {
        $this->codafp = $codafp;

        return $this;
    }

    /**
     * Get codafp
     *
     * @return string
     */
    public function getCodafp()
    {
        return $this->codafp;
    }

    /**
     * Set rutafp
     *
     * @param string $rutafp
     *
     * @return sueafp
     */
    public function setRutafp($rutafp)
    {
        $this->rutafp = $rutafp;

        return $this;
    }

    /**
     * Get rutafp
     *
     * @return string
     */
    public function getRutafp()
    {
        return $this->rutafp;
    }

    /**
     * Set gloafp
     *
     * @param string $gloafp
     *
     * @return sueafp
     */
    public function setGloafp($gloafp)
    {
        $this->gloafp = $gloafp;

        return $this;
    }

    /**
     * Get gloafp
     *
     * @return string
     */
    public function getGloafp()
    {
        return $this->gloafp;
    }

    /**
     * Set prevafp
     *
     * @param string $prevafp
     *
     * @return sueafp
     */
    public function setPrevafp($prevafp)
    {
        $this->prevafp = $prevafp;

        return $this;
    }

    /**
     * Get prevafp
     *
     * @return string
     */
    public function getPrevafp()
    {
        return $this->prevafp;
    }

    /**
     * Set pvejez
     *
     * @param integer $pvejez
     *
     * @return sueafp
     */
    public function setPvejez($pvejez)
    {
        $this->pvejez = $pvejez;

        return $this;
    }

    /**
     * Get pvejez
     *
     * @return int
     */
    public function getPvejez()
    {
        return $this->pvejez;
    }

    /**
     * Set pseguro
     *
     * @param integer $pseguro
     *
     * @return sueafp
     */
    public function setPseguro($pseguro)
    {
        $this->pseguro = $pseguro;

        return $this;
    }

    /**
     * Get pseguro
     *
     * @return int
     */
    public function getPseguro()
    {
        return $this->pseguro;
    }

    /**
     * Set pcomision
     *
     * @param integer $pcomision
     *
     * @return sueafp
     */
    public function setPcomision($pcomision)
    {
        $this->pcomision = $pcomision;

        return $this;
    }

    /**
     * Get pcomision
     *
     * @return int
     */
    public function getPcomision()
    {
        return $this->pcomision;
    }
}

