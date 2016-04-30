<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historialusuario
 *
 * @ORM\Table(name="historialusuario", uniqueConstraints={@ORM\UniqueConstraint(name="historialusuario_pk", columns={"id"})}, indexes={@ORM\Index(name="posee10_fk", columns={"idusuario"})})
 * @ORM\Entity
 */
class Historialusuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="historialusuario_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=1024, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaaccion", type="date", nullable=true)
     */
    private $fechaaccion;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuario", referencedColumnName="id")
     * })
     */
    private $idusuario;



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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Historialusuario
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
     * Set fechaaccion
     *
     * @param \DateTime $fechaaccion
     * @return Historialusuario
     */
    public function setFechaaccion($fechaaccion)
    {
        $this->fechaaccion = $fechaaccion;

        return $this;
    }

    /**
     * Get fechaaccion
     *
     * @return \DateTime 
     */
    public function getFechaaccion()
    {
        return $this->fechaaccion;
    }

    /**
     * Set idusuario
     *
     * @param \BadBundle\Entity\Usuario $idusuario
     * @return Historialusuario
     */
    public function setIdusuario(\BadBundle\Entity\Usuario $idusuario = null)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return \BadBundle\Entity\Usuario 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }
}
