<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materiaplanestudio
 *
 * @ORM\Table(name="materiaplanestudio", uniqueConstraints={@ORM\UniqueConstraint(name="paquetemateria", columns={"idmateria", "idplanestudio"}), @ORM\UniqueConstraint(name="pk_paquetemateria", columns={"id"})}, indexes={@ORM\Index(name="IDX_55A18340B2F400EA", columns={"idmateria"}), @ORM\Index(name="IDX_55A1834034A19577", columns={"idplanestudio"})})
 * @ORM\Entity
 */
class Materiaplanestudio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="materiaplanestudio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \Plandeestudio
     *
     * @ORM\ManyToOne(targetEntity="Plandeestudio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idplanestudio", referencedColumnName="id")
     * })
     */
    private $idplanestudio;



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
     * Set idmateria
     *
     * @param \BadBundle\Entity\Materia $idmateria
     * @return Materiaplanestudio
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

    /**
     * Set idplanestudio
     *
     * @param \BadBundle\Entity\Plandeestudio $idplanestudio
     * @return Materiaplanestudio
     */
    public function setIdplanestudio(\BadBundle\Entity\Plandeestudio $idplanestudio = null)
    {
        $this->idplanestudio = $idplanestudio;

        return $this;
    }

    /**
     * Get idplanestudio
     *
     * @return \BadBundle\Entity\Plandeestudio 
     */
    public function getIdplanestudio()
    {
        return $this->idplanestudio;
    }
}
