<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Docentedepartamento
 *
 * @ORM\Table(name="docentedepartamento", uniqueConstraints={@ORM\UniqueConstraint(name="pkdocentedepto", columns={"id"}), @ORM\UniqueConstraint(name="docentemateria1", columns={"iddocente", "iddepartamento"})}, indexes={@ORM\Index(name="IDX_5E5C379364BE8E2", columns={"iddepartamento"}), @ORM\Index(name="IDX_5E5C3793229B9DCA", columns={"iddocente"})})
 * @ORM\Entity
 */
class Docentedepartamento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="docentedepartamento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \Docente
     *
     * @ORM\ManyToOne(targetEntity="Docente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddocente", referencedColumnName="id")
     * })
     */
    private $iddocente;



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
     * Set iddepartamento
     *
     * @param \BadBundle\Entity\Departamento $iddepartamento
     * @return Docentedepartamento
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
     * Set iddocente
     *
     * @param \BadBundle\Entity\Docente $iddocente
     * @return Docentedepartamento
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
}
