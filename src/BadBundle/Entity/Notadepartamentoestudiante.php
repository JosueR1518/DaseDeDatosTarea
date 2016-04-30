<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notadepartamentoestudiante
 *
 * @ORM\Table(name="notadepartamentoestudiante", uniqueConstraints={@ORM\UniqueConstraint(name="notadeptoestudiante", columns={"idestudiante", "iddepartamento"}), @ORM\UniqueConstraint(name="pk_notadepto", columns={"id"})}, indexes={@ORM\Index(name="IDX_8406309864BE8E2", columns={"iddepartamento"}), @ORM\Index(name="IDX_84063098F6962297", columns={"idestudiante"})})
 * @ORM\Entity
 */
class Notadepartamentoestudiante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="notadepartamentoestudiante_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nota", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $nota;

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
     * @param string $nota
     * @return Notadepartamentoestudiante
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set iddepartamento
     *
     * @param \BadBundle\Entity\Departamento $iddepartamento
     * @return Notadepartamentoestudiante
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
     * Set idestudiante
     *
     * @param \BadBundle\Entity\Estudiante $idestudiante
     * @return Notadepartamentoestudiante
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
