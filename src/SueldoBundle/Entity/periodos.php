<?php

namespace SueldoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * periodos
 *
 * @ORM\Table(name="periodos")
 * @ORM\Entity(repositoryClass="SueldoBundle\Repository\periodosRepository")
 */
class periodos
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
     * @ORM\Column(name="mes", type="string", length=2)
     */
    private $mes;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="periodo_vo", type="date")
     */
    private $periodoVo;

    /**
     * @var bool
     *
     * @ORM\Column(name="okactual", type="boolean")
     */
    private $okactual;

    /**
     * @var bool
     *
     * @ORM\Column(name="okcerrado", type="boolean")
     */
    private $okcerrado;

    /**
     * @var bool
     *
     * @ORM\Column(name="okcreado", type="boolean")
     */
    private $okcreado;


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
     * @return periodos
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
     * Set mes
     *
     * @param string $mes
     *
     * @return periodos
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return string
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set periodoVo
     *
     * @param \DateTime $periodoVo
     *
     * @return periodos
     */
    public function setPeriodoVo($periodoVo)
    {
        $this->periodoVo = $periodoVo;

        return $this;
    }

    /**
     * Get periodoVo
     *
     * @return \DateTime
     */
    public function getPeriodoVo()
    {
        return $this->periodoVo;
    }

    /**
     * Set okactual
     *
     * @param boolean $okactual
     *
     * @return periodos
     */
    public function setOkactual($okactual)
    {
        $this->okactual = $okactual;

        return $this;
    }

    /**
     * Get okactual
     *
     * @return bool
     */
    public function getOkactual()
    {
        return $this->okactual;
    }

    /**
     * Set okcerrado
     *
     * @param boolean $okcerrado
     *
     * @return periodos
     */
    public function setOkcerrado($okcerrado)
    {
        $this->okcerrado = $okcerrado;

        return $this;
    }

    /**
     * Get okcerrado
     *
     * @return bool
     */
    public function getOkcerrado()
    {
        return $this->okcerrado;
    }

    /**
     * Set okcreado
     *
     * @param boolean $okcreado
     *
     * @return periodos
     */
    public function setOkcreado($okcreado)
    {
        $this->okcreado = $okcreado;

        return $this;
    }

    /**
     * Get okcreado
     *
     * @return bool
     */
    public function getOkcreado()
    {
        return $this->okcreado;
    }
}

