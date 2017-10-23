<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preimp
 *
 * @ORM\Table(name="preimp")
 * @ORM\Entity(repositoryClass="Amd\PiperBundle\Repository\PreimpRepository")
 */
class Preimp
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
     * @ORM\Column(name="vouegre", type="boolean")
     */
    private $vouegre;

    /**
     * @var bool
     *
     * @ORM\Column(name="vouhono", type="boolean")
     */
    private $vouhono;

    /**
     * @var bool
     *
     * @ORM\Column(name="voucomp", type="boolean")
     */
    private $voucomp;

    /**
     * @var bool
     *
     * @ORM\Column(name="vouven", type="boolean")
     */
    private $vouven;


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
     * Set vouegre
     *
     * @param string $vouegre
     * @return Preimp
     */
    public function setVouegre($vouegre)
    {
        $this->vouegre = $vouegre;

        return $this;
    }

    /**
     * Get vouegre
     *
     * @return string 
     */
    public function getVouegre()
    {
        return $this->vouegre;
    }

    /**
     * Set vouhono
     *
     * @param boolean $vouhono
     * @return Preimp
     */
    public function setVouhono($vouhono)
    {
        $this->vouhono = $vouhono;

        return $this;
    }

    /**
     * Get vouhono
     *
     * @return boolean 
     */
    public function getVouhono()
    {
        return $this->vouhono;
    }

    /**
     * Set voucomp
     *
     * @param boolean $voucomp
     * @return Preimp
     */
    public function setVoucomp($voucomp)
    {
        $this->voucomp = $voucomp;

        return $this;
    }

    /**
     * Get voucomp
     *
     * @return boolean 
     */
    public function getVoucomp()
    {
        return $this->voucomp;
    }

    /**
     * Set vouven
     *
     * @param boolean $vouven
     * @return Preimp
     */
    public function setVouven($vouven)
    {
        $this->vouven = $vouven;

        return $this;
    }

    /**
     * Get vouven
     *
     * @return boolean 
     */
    public function getVouven()
    {
        return $this->vouven;
    }
}
