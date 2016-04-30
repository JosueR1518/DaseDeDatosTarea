<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscripcion
 *
 * @ORM\Table(name="inscripcion", uniqueConstraints={@ORM\UniqueConstraint(name="inscripcio_pk", columns={"id"})}, indexes={@ORM\Index(name="se_registran_fk", columns={"idciclo"}), @ORM\Index(name="es_para_fk", columns={"iddescripcioninscripcion"})})
 * @ORM\Entity
 */
class Inscripcion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="inscripcion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorainscripcion", type="date", nullable=false)
     */
    private $fechahorainscripcion;

    /**
     * @var \Descripcioninscripcion
     *
     * @ORM\ManyToOne(targetEntity="Descripcioninscripcion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddescripcioninscripcion", referencedColumnName="id")
     * })
     */
    private $iddescripcioninscripcion;

    /**
     * @var \Ciclo
     *
     * @ORM\ManyToOne(targetEntity="Ciclo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idciclo", referencedColumnName="id")
     * })
     */
    private $idciclo;



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
     * Set fechahorainscripcion
     *
     * @param \DateTime $fechahorainscripcion
     * @return Inscripcion
     */
    public function setFechahorainscripcion($fechahorainscripcion)
    {
        $this->fechahorainscripcion = $fechahorainscripcion;

        return $this;
    }

    /**
     * Get fechahorainscripcion
     *
     * @return \DateTime 
     */
    public function getFechahorainscripcion()
    {
        return $this->fechahorainscripcion;
    }

    /**
     * Set iddescripcioninscripcion
     *
     * @param \BadBundle\Entity\Descripcioninscripcion $iddescripcioninscripcion
     * @return Inscripcion
     */
    public function setIddescripcioninscripcion(\BadBundle\Entity\Descripcioninscripcion $iddescripcioninscripcion = null)
    {
        $this->iddescripcioninscripcion = $iddescripcioninscripcion;

        return $this;
    }

    /**
     * Get iddescripcioninscripcion
     *
     * @return \BadBundle\Entity\Descripcioninscripcion 
     */
    public function getIddescripcioninscripcion()
    {
        return $this->iddescripcioninscripcion;
    }

    /**
     * Set idciclo
     *
     * @param \BadBundle\Entity\Ciclo $idciclo
     * @return Inscripcion
     */
    public function setIdciclo(\BadBundle\Entity\Ciclo $idciclo = null)
    {
        $this->idciclo = $idciclo;

        return $this;
    }

    /**
     * Get idciclo
     *
     * @return \BadBundle\Entity\Ciclo 
     */
    public function getIdciclo()
    {
        return $this->idciclo;
    }
}
