<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tutoria
 *
 * @ORM\Table(name="tutoria", uniqueConstraints={@ORM\UniqueConstraint(name="tutoria_pk", columns={"id"})}, indexes={@ORM\Index(name="recibe_fk", columns={"idestudiante"}), @ORM\Index(name="tiene_1_fk", columns={"idetapa"}), @ORM\Index(name="IDX_684C2B70229B9DCA", columns={"iddocente"})})
 * @ORM\Entity
 */
class Tutoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tutoria_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="asunto", type="string", length=254, nullable=false)
     */
    private $asunto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=254, nullable=false)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechahora", type="date", nullable=false)
     */
    private $fechahora;

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
     * @var \Docente
     *
     * @ORM\ManyToOne(targetEntity="Docente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddocente", referencedColumnName="id")
     * })
     */
    private $iddocente;

    /**
     * @var \Etapa
     *
     * @ORM\ManyToOne(targetEntity="Etapa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idetapa", referencedColumnName="id")
     * })
     */
    private $idetapa;



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
     * Set asunto
     *
     * @param string $asunto
     * @return Tutoria
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;

        return $this;
    }

    /**
     * Get asunto
     *
     * @return string 
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tutoria
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
     * Set fechahora
     *
     * @param \DateTime $fechahora
     * @return Tutoria
     */
    public function setFechahora($fechahora)
    {
        $this->fechahora = $fechahora;

        return $this;
    }

    /**
     * Get fechahora
     *
     * @return \DateTime 
     */
    public function getFechahora()
    {
        return $this->fechahora;
    }

    /**
     * Set idestudiante
     *
     * @param \BadBundle\Entity\Estudiante $idestudiante
     * @return Tutoria
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
     * Set iddocente
     *
     * @param \BadBundle\Entity\Docente $iddocente
     * @return Tutoria
     */
    public function setIddocente(\BadBundle\Entity\Docente $iddocente = null)
    {
        $this->iddocente = $iddocente;

        return $this;
    }

    /**
     * Get iddocente
     *
     * @return \BadBundle\Entity\Docente 
     */
    public function getIddocente()
    {
        return $this->iddocente;
    }

    /**
     * Set idetapa
     *
     * @param \BadBundle\Entity\Etapa $idetapa
     * @return Tutoria
     */
    public function setIdetapa(\BadBundle\Entity\Etapa $idetapa = null)
    {
        $this->idetapa = $idetapa;

        return $this;
    }

    /**
     * Get idetapa
     *
     * @return \BadBundle\Entity\Etapa 
     */
    public function getIdetapa()
    {
        return $this->idetapa;
    }
}
