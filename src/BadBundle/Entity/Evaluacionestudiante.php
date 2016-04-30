<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluacionestudiante
 *
 * @ORM\Table(name="evaluacionestudiante", uniqueConstraints={@ORM\UniqueConstraint(name="evalaucion_estudiante", columns={"idestudiante", "idevaluacion"}), @ORM\UniqueConstraint(name="pk_evaluacion_estudiante", columns={"id"})}, indexes={@ORM\Index(name="IDX_A7DCC3981344D769", columns={"idevaluacion"}), @ORM\Index(name="IDX_A7DCC398F6962297", columns={"idestudiante"})})
 * @ORM\Entity
 */
class Evaluacionestudiante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="evaluacionestudiante_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="nota", type="float", precision=10, scale=0, nullable=true)
     */
    private $nota;

    /**
     * @var \Evaluacionmateria
     *
     * @ORM\ManyToOne(targetEntity="Evaluacionmateria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idevaluacion", referencedColumnName="id")
     * })
     */
    private $idevaluacion;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nota
     *
     * @param float $nota
     * @return Evaluacionestudiante
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return float 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set idevaluacion
     *
     * @param \BadBundle\Entity\Evaluacionmateria $idevaluacion
     * @return Evaluacionestudiante
     */
    public function setIdevaluacion(\BadBundle\Entity\Evaluacionmateria $idevaluacion = null)
    {
        $this->idevaluacion = $idevaluacion;

        return $this;
    }

    /**
     * Get idevaluacion
     *
     * @return \BadBundle\Entity\Evaluacionmateria 
     */
    public function getIdevaluacion()
    {
        return $this->idevaluacion;
    }

    /**
     * Set idestudiante
     *
     * @param \BadBundle\Entity\Estudiante $idestudiante
     * @return Evaluacionestudiante
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
}
