<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plandeestudio
 *
 * @ORM\Table(name="plandeestudio", uniqueConstraints={@ORM\UniqueConstraint(name="nombreplanestudio", columns={"nombre"}), @ORM\UniqueConstraint(name="plandeestudio_pk", columns={"id"})}, indexes={@ORM\Index(name="se_conforma_fk", columns={"idcarrera"})})
 * @ORM\Entity
 */
class Plandeestudio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="plandeestudio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=254, nullable=false)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacreacion", type="date", nullable=false)
     */
    private $fechacreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechamodificacion", type="date", nullable=true)
     */
    private $fechamodificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=254, nullable=false)
     */
    private $descripcion;

    /**
     * @var \Carrera
     *
     * @ORM\ManyToOne(targetEntity="Carrera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcarrera", referencedColumnName="id")
     * })
     */
    private $idcarrera;



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
     * @return Plandeestudio
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
     * Set fechacreacion
     *
     * @param \DateTime $fechacreacion
     * @return Plandeestudio
     */
    public function setFechacreacion($fechacreacion)
    {
        $this->fechacreacion = $fechacreacion;

        return $this;
    }

    /**
     * Get fechacreacion
     *
     * @return \DateTime 
     */
    public function getFechacreacion()
    {
        return $this->fechacreacion;
    }

    /**
     * Set fechamodificacion
     *
     * @param \DateTime $fechamodificacion
     * @return Plandeestudio
     */
    public function setFechamodificacion($fechamodificacion)
    {
        $this->fechamodificacion = $fechamodificacion;

        return $this;
    }

    /**
     * Get fechamodificacion
     *
     * @return \DateTime 
     */
    public function getFechamodificacion()
    {
        return $this->fechamodificacion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Plandeestudio
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
     * Set idcarrera
     *
     * @param \BadBundle\Entity\Carrera $idcarrera
     * @return Plandeestudio
     */
    public function setIdcarrera(\BadBundle\Entity\Carrera $idcarrera = null)
    {
        $this->idcarrera = $idcarrera;

        return $this;
    }

    /**
     * Get idcarrera
     *
     * @return \BadBundle\Entity\Carrera 
     */
    public function getIdcarrera()
    {
        return $this->idcarrera;
    }
}
