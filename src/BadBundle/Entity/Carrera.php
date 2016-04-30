<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carrera
 *
 * @ORM\Table(name="carrera", uniqueConstraints={@ORM\UniqueConstraint(name="carrera_pk", columns={"id"}), @ORM\UniqueConstraint(name="codigocarrera", columns={"codigo"}), @ORM\UniqueConstraint(name="nombrecarrera", columns={"nombre"})}, indexes={@ORM\Index(name="se_constituye_fk", columns={"idescuela"})})
 * @ORM\Entity
 */
class Carrera
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="carrera_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=1024, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo", type="integer", nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=1024, nullable=false)
     */
    private $descripcion;

    /**
     * @var \Escuela
     *
     * @ORM\ManyToOne(targetEntity="Escuela")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idescuela", referencedColumnName="id")
     * })
     */
    private $idescuela;



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
     * @return Carrera
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
     * @param integer $codigo
     * @return Carrera
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return integer 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Carrera
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
     * Set idescuela
     *
     * @param \BadBundle\Entity\Escuela $idescuela
     * @return Carrera
     */
    public function setIdescuela(\BadBundle\Entity\Escuela $idescuela = null)
    {
        $this->idescuela = $idescuela;

        return $this;
    }

    /**
     * Get idescuela
     *
     * @return \BadBundle\Entity\Escuela 
     */
    public function getIdescuela()
    {
        return $this->idescuela;
    }
}
