<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipovou
 *
 * @ORM\Table(name="tipovou")
 * @ORM\Entity(repositoryClass="Amd\PiperBundle\Repository\TipovouRepository")
 */
class Tipovou
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
     * @ORM\Column(name="cod", type="string", length=50, unique=true)
     */
    private $cod;


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
     * Set cod
     *
     * @param string $cod
     * @return Tipovou
     */
    public function setCod($cod)
    {
        $this->cod = $cod;

        return $this;
    }

    /**
     * Get cod
     *
     * @return string 
     */
    public function getCod()
    {
        return $this->cod;
    }

     public function __toString() {

        return $this->cod;
    }
}
