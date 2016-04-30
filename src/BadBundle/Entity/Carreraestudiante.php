<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carreraestudiante
 *
 * @ORM\Table(name="carreraestudiante", uniqueConstraints={@ORM\UniqueConstraint(name="pkcarreraestudiante", columns={"id"}), @ORM\UniqueConstraint(name="carrera_estudiante", columns={"idestudiante", "idcarrera"})}, indexes={@ORM\Index(name="IDX_492095F1101A9F5E", columns={"idcarrera"}), @ORM\Index(name="IDX_492095F1F6962297", columns={"idestudiante"})})
 * @ORM\Entity
 */
class Carreraestudiante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="carreraestudiante_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cum", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $cum;

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
     * Set cum
     *
     * @param string $cum
     * @return Carreraestudiante
     */
    public function setCum($cum)
    {
        $this->cum = $cum;

        return $this;
    }

    /**
     * Get cum
     *
     * @return string 
     */
    public function getCum()
    {
        return $this->cum;
    }

    /**
     * Set idcarrera
     *
     * @param \BadBundle\Entity\Carrera $idcarrera
     * @return Carreraestudiante
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

    /**
     * Set idestudiante
     *
     * @param \BadBundle\Entity\Estudiante $idestudiante
     * @return Carreraestudiante
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
