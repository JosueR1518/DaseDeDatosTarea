<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Docentemateria
 *
 * @ORM\Table(name="docentemateria", uniqueConstraints={@ORM\UniqueConstraint(name="docente_materia", columns={"idjefedepto", "idmateria"}), @ORM\UniqueConstraint(name="pkdocentemateria", columns={"id"})}, indexes={@ORM\Index(name="IDX_19F07723DBEE815F", columns={"idjefedepto"}), @ORM\Index(name="IDX_19F07723B2F400EA", columns={"idmateria"})})
 * @ORM\Entity
 */
class Docentemateria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="docentemateria_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Docente
     *
     * @ORM\ManyToOne(targetEntity="Docente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idjefedepto", referencedColumnName="id")
     * })
     */
    private $idjefedepto;

    /**
     * @var \Materia
     *
     * @ORM\ManyToOne(targetEntity="Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idmateria", referencedColumnName="idmateria")
     * })
     */
    private $idmateria;



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
     * Set idjefedepto
     *
     * @param \BadBundle\Entity\Docente $idjefedepto
     * @return Docentemateria
     */
    public function setIdjefedepto(\BadBundle\Entity\Docente $idjefedepto = null)
    {
        $this->idjefedepto = $idjefedepto;

        return $this;
    }

    /**
     * Get idjefedepto
     *
     * @return \BadBundle\Entity\Docente 
     */
    public function getIdjefedepto()
    {
        return $this->idjefedepto;
    }

    /**
     * Set idmateria
     *
     * @param \BadBundle\Entity\Materia $idmateria
     * @return Docentemateria
     */
    public function setIdmateria(\BadBundle\Entity\Materia $idmateria = null)
    {
        $this->idmateria = $idmateria;

        return $this;
    }

    /**
     * Get idmateria
     *
     * @return \BadBundle\Entity\Materia 
     */
    public function getIdmateria()
    {
        return $this->idmateria;
    }
}
