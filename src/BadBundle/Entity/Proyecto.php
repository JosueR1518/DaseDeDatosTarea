<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto
 *
 * @ORM\Table(name="proyecto", uniqueConstraints={@ORM\UniqueConstraint(name="nobreproyecto", columns={"nombre"}), @ORM\UniqueConstraint(name="proyecto_pk", columns={"id"})}, indexes={@ORM\Index(name="aprobada_fk", columns={"iddirectorescuela"})})
 * @ORM\Entity
 */
class Proyecto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="proyecto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=254, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="unidadvalorativa", type="integer", nullable=false)
     */
    private $unidadvalorativa;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=254, nullable=false)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechainicio", type="date", nullable=false)
     */
    private $fechainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafin", type="date", nullable=false)
     */
    private $fechafin;

    /**
     * @var string
     *
     * @ORM\Column(name="alcance", type="string", length=254, nullable=false)
     */
    private $alcance;

    /**
     * @var string
     *
     * @ORM\Column(name="objetivo", type="string", length=254, nullable=false)
     */
    private $objetivo;

    /**
     * @var \Directorescuela
     *
     * @ORM\ManyToOne(targetEntity="Directorescuela")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddirectorescuela", referencedColumnName="id")
     * })
     */
    private $iddirectorescuela;



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
     * Set nombre
     *
     * @param string $nombre
     * @return Proyecto
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
     * Set unidadvalorativa
     *
     * @param integer $unidadvalorativa
     * @return Proyecto
     */
    public function setUnidadvalorativa($unidadvalorativa)
    {
        $this->unidadvalorativa = $unidadvalorativa;

        return $this;
    }

    /**
     * Get unidadvalorativa
     *
     * @return integer 
     */
    public function getUnidadvalorativa()
    {
        return $this->unidadvalorativa;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Proyecto
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
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return Proyecto
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return Proyecto
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set alcance
     *
     * @param string $alcance
     * @return Proyecto
     */
    public function setAlcance($alcance)
    {
        $this->alcance = $alcance;

        return $this;
    }

    /**
     * Get alcance
     *
     * @return string 
     */
    public function getAlcance()
    {
        return $this->alcance;
    }

    /**
     * Set objetivo
     *
     * @param string $objetivo
     * @return Proyecto
     */
    public function setObjetivo($objetivo)
    {
        $this->objetivo = $objetivo;

        return $this;
    }

    /**
     * Get objetivo
     *
     * @return string 
     */
    public function getObjetivo()
    {
        return $this->objetivo;
    }

    /**
     * Set iddirectorescuela
     *
     * @param \BadBundle\Entity\Directorescuela $iddirectorescuela
     * @return Proyecto
     */
    public function setIddirectorescuela(\BadBundle\Entity\Directorescuela $iddirectorescuela = null)
    {
        $this->iddirectorescuela = $iddirectorescuela;

        return $this;
    }

    /**
     * Get iddirectorescuela
     *
     * @return \BadBundle\Entity\Directorescuela 
     */
    public function getIddirectorescuela()
    {
        return $this->iddirectorescuela;
    }
}
