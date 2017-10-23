<?php

namespace Amd\PiperBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity(repositoryClass="Amd\PiperBundle\Repository\EmpresaRepository")
 */
class Empresa
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
     * @ORM\Column(name="rut", type="string", length=255)
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="dedica", type="string", length=255)
     */
    private $dedica;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="fono", type="string", length=255)
     */
    private $fono;

   
    /**
     * @var string
     *
     * @ORM\Column(name="correlativo", type="string", length=255)
     */
    private $correlativo;


    /**
     * @var string
     *
     * @ORM\Column(name="sitadminproye", type="boolean")
     */
    private $sitadminproye;


    /**
     * @var string
     *
     * @ORM\Column(name="rutre", type="string", length=255)
     */
    private $rutre;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrere", type="string", length=255)
     */
    private $nombrere;

    /**
     * @var string
     *
     * @ORM\Column(name="direccionre", type="string", length=255)
     */
    private $direccionre;

    /**
     * @var string
     *
     * @ORM\Column(name="cellre", type="string", length=255)
     */
    private $cellre;


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
     * @ORM\Column(name="rutac", type="boolean")
     */
    private $rutac;

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
     * @var bool
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
     * Set rut
     *
     * @param string $rut
     * @return Empresa
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
     * Set nombre
     *
     * @param string $nombre
     * @return Empresa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set dedica
     *
     * @param string $dedica
     * @return Empresa
     */
    public function setDedica($dedica)
    {
        $this->dedica = $dedica;

        return $this;
    }

    /**
     * Get dedica
     *
     * @return string 
     */
    public function getDedica()
    {
        return $this->dedica;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Empresa
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Empresa
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fono
     *
     * @param string $fono
     * @return Empresa
     */
    public function setFono($fono)
    {
        $this->fono = $fono;

        return $this;
    }

    /**
     * Get fono
     *
     * @return string 
     */
    public function getFono()
    {
        return $this->fono;
    }

   
    /**
     * Set correlativo
     *
     * @param string $correlativo
     * @return Empresa
     */
    public function setCorrelativo($correlativo)
    {
        $this->correlativo = $correlativo;

        return $this;
    }

    /**
     * Get correlativo
     *
     * @return string 
     */
    public function getCorrelativo()
    {
        return $this->correlativo;
    }
    

     /**
     * Set sitadminproye
     *
     * @param string $sitadminproye
     * @return Empresa
     */
    public function setSitadminproye($sitadminproye)
    {
        $this->sitadminproye = $sitadminproye;

        return $this;
    }

    /**
     * Get sitadminproye
     *
     * @return string 
     */
    public function getSitadminproye()
    {
        return $this->sitadminproye;
    }

     /**
     * Set rutre
     *
     * @param string $rutre
     * @return Empresa
     */
    public function setRutre($rutre)
    {
        $this->rutre = $rutre;

        return $this;
    }

    /**
     * Get rutre
     *
     * @return string 
     */
    public function getRutre()
    {
        return $this->rutre;
    }

    /**
     * Set nombrere
     *
     * @param string $nombrere
     * @return Empresa
     */
    public function setNombrere($nombrere)
    {
        $this->nombrere = $nombrere;

        return $this;
    }

    /**
     * Get nombrere
     *
     * @return string 
     */
    public function getNombrere()
    {
        return $this->nombrere;
    }

    /**
     * Set direccionre
     *
     * @param string $direccionre
     * @return Empresa
     */
    public function setDireccionre($direccionre)
    {
        $this->direccionre = $direccionre;

        return $this;
    }

    /**
     * Get direccionre
     *
     * @return string 
     */
    public function getDireccionre()
    {
        return $this->direccionre;
    }

    /**
     * Set cellre
     *
     * @param string $cellre
     * @return Empresa
     */
    public function setCellre($cellre)
    {
        $this->cellre = $cellre;

        return $this;
    }

    /**
     * Get cellre
     *
     * @return string 
     */
    public function getCellre()
    {
        return $this->cellre;
    }

    /**
     * Set centro
     *
     * @param string $centro
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * Set rutac
     *
     * @param string $rutac
     * @return Empresa
     */
    public function setRutac($rutac)
    {
        $this->rutac = $rutac;

        return $this;
    }

    /**
     * Get rutac
     *
     * @return string 
     */
    public function getRutac()
    {
        return $this->rutac;
    }

    /**
     * Set td1
     *
     * @param string $td1
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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

    /**
     * Set vouegre
     *
     * @param boolean $vouegre
     * @return Empresa
     */
    public function setVouegre($vouegre)
    {
        $this->vouegre = $vouegre;

        return $this;
    }

    /**
     * Get vouegre
     *
     * @return boolean 
     */
    public function getVouegre()
    {
        return $this->vouegre;
    }

    /**
     * Set vouhono
     *
     * @param boolean $vouhono
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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


     public function __toString() {

        return $this->direccion;
    }
}
