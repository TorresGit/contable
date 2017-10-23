<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flujo
 *
 * @ORM\Table(name="flujo")
 * @ORM\Entity(repositoryClass="Amd\PiperBundle\Repository\FlujoRepository")
 */
class Flujo
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
     * @ORM\Column(name="grupo", type="string", length=255)
     */
    private $grupo;

    /**
     * @var string
     *
     * @ORM\Column(name="descrip", type="string", length=255)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="debe", type="string", length=255)
     */
    private $debe;

    /**
     * @var string
     *
     * @ORM\Column(name="haber", type="string", length=255)
     */
    private $haber;


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
     * Set grupo
     *
     * @param string $grupo
     * @return Flujo
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return string 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Flujo
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
     * Set debe
     *
     * @param string $debe
     * @return Flujo
     */
    public function setDebe($debe)
    {
        $this->debe = $debe;

        return $this;
    }

    /**
     * Get debe
     *
     * @return string 
     */
    public function getDebe()
    {
        return $this->debe;
    }

    /**
     * Set haber
     *
     * @param string $haber
     * @return Flujo
     */
    public function setHaber($haber)
    {
        $this->haber = $haber;

        return $this;
    }

    /**
     * Get haber
     *
     * @return string 
     */
    public function getHaber()
    {
        return $this->haber;
    }
}
