<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscripcionestudiante
 *
 * @ORM\Table(name="inscripcionestudiante", uniqueConstraints={@ORM\UniqueConstraint(name="inscripcionpadre", columns={"idestudiante", "idinscripcion"}), @ORM\UniqueConstraint(name="se_procede_pk", columns={"id"})}, indexes={@ORM\Index(name="IDX_D3C9CA04F6962297", columns={"idestudiante"}), @ORM\Index(name="IDX_D3C9CA04559FE95F", columns={"idinscripcion"})})
 * @ORM\Entity
 */
class Inscripcionestudiante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="inscripcionestudiante_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahorainscripcion", type="date", nullable=true)
     */
    private $fechahorainscripcion;

    /**
     * @var \Estudiante
     *
     * @ORM\ManyToOne(targetEntity="Estudiante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idestudiante", referencedColumnName="id")
     * })
     */
    private $idestudiante;

    /**
     * @var \Inscripcion
     *
     * @ORM\ManyToOne(targetEntity="Inscripcion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idinscripcion", referencedColumnName="id")
     * })
     */
    private $idinscripcion;



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
     * @return Inscripcionestudiante
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
     * Set idestudiante
     *
     * @param \BadBundle\Entity\Estudiante $idestudiante
     * @return Inscripcionestudiante
     */
    public function setIdestudiante(\BadBundle\Entity\Estudiante $idestudiante = null)
    {
        $this->idestudiante = $idestudiante;

        return $this;
    }

    /**
     * Get idestudiante
     *
     * @return \BadBundle\Entity\Estudiante 
     */
    public function getIdestudiante()
    {
        return $this->idestudiante;
    }

    /**
     * Set idinscripcion
     *
     * @param \BadBundle\Entity\Inscripcion $idinscripcion
     * @return Inscripcionestudiante
     */
    public function setIdinscripcion(\BadBundle\Entity\Inscripcion $idinscripcion = null)
    {
        $this->idinscripcion = $idinscripcion;

        return $this;
    }

    /**
     * Get idinscripcion
     *
     * @return \BadBundle\Entity\Inscripcion 
     */
    public function getIdinscripcion()
    {
        return $this->idinscripcion;
    }
}
