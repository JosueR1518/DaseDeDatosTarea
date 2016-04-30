<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materia
 *
 * @ORM\Table(name="materia", uniqueConstraints={@ORM\UniqueConstraint(name="materia_cod", columns={"codigo"}), @ORM\UniqueConstraint(name="pkmateria", columns={"idmateria"}), @ORM\UniqueConstraint(name="materia_nombre", columns={"nombre"})}, indexes={@ORM\Index(name="pertenecen_fk", columns={"iddepartamento"}), @ORM\Index(name="se_agrega_fk", columns={"idpera"})})
 * @ORM\Entity
 */
class Materia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idmateria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="materia_idmateria_seq", allocationSize=1, initialValue=1)
     */
    private $idmateria;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=254, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=254, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=254, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="unidadesvalorativa", type="integer", nullable=false)
     */
    private $unidadesvalorativa;

    /**
     * @var \Departamento
     *
     * @ORM\ManyToOne(targetEntity="Departamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddepartamento", referencedColumnName="id")
     * })
     */
    private $iddepartamento;

    /**
     * @var \Paquetepera
     *
     * @ORM\ManyToOne(targetEntity="Paquetepera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpera", referencedColumnName="id")
     * })
     */
    private $idpera;



    /**
     * Get idmateria
     *
     * @return integer 
     */
    public function getIdmateria()
    {
        return $this->idmateria;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Materia
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
     * Set codigo
     *
     * @param string $codigo
     * @return Materia
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Materia
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set unidadesvalorativa
     *
     * @param integer $unidadesvalorativa
     * @return Materia
     */
    public function setUnidadesvalorativa($unidadesvalorativa)
    {
        $this->unidadesvalorativa = $unidadesvalorativa;

        return $this;
    }

    /**
     * Get unidadesvalorativa
     *
     * @return integer 
     */
    public function getUnidadesvalorativa()
    {
        return $this->unidadesvalorativa;
    }

    /**
     * Set iddepartamento
     *
     * @param \BadBundle\Entity\Departamento $iddepartamento
     * @return Materia
     */
    public function setIddepartamento(\BadBundle\Entity\Departamento $iddepartamento = null)
    {
        $this->iddepartamento = $iddepartamento;

        return $this;
    }

    /**
     * Get iddepartamento
     *
     * @return \BadBundle\Entity\Departamento 
     */
    public function getIddepartamento()
    {
        return $this->iddepartamento;
    }

    /**
     * Set idpera
     *
     * @param \BadBundle\Entity\Paquetepera $idpera
     * @return Materia
     */
    public function setIdpera(\BadBundle\Entity\Paquetepera $idpera = null)
    {
        $this->idpera = $idpera;

        return $this;
    }

    /**
     * Get idpera
     *
     * @return \BadBundle\Entity\Paquetepera 
     */
    public function getIdpera()
    {
        return $this->idpera;
    }
}
