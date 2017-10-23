<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contabilizar
 *
 * @ORM\Table(name="contabilizar")
 * @ORM\Entity(repositoryClass="Amd\PiperBundle\Repository\ContabilizarRepository")
 */
class Contabilizar
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
     * @ORM\Column(name="ctare", type="boolean")
     */
    private $ctare;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ctare
     *
     * @param string $ctare
     * @return Contabilizar
     */
    public function setCtare($ctare)
    {
        $this->ctare = $ctare;

        return $this;
    }

    /**
     * Get ctare
     *
     * @return string 
     */
    public function getCtare()
    {
        return $this->ctare;
    }

    /**
     * Set flujo
     *
     * @param string $flujo
     * @return Contabilizar
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
     * @return Contabilizar
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

    public function __toString() {

        return $this->ctare;
    }
}
