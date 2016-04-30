<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materiaciclo
 *
 * @ORM\Table(name="materiaciclo", uniqueConstraints={@ORM\UniqueConstraint(name="materia_ciclo", columns={"idciclo", "idmateria"}), @ORM\UniqueConstraint(name="pk_materiaci", columns={"id"})}, indexes={@ORM\Index(name="IDX_40BFD853D64F030B", columns={"idciclo"}), @ORM\Index(name="IDX_40BFD853B2F400EA", columns={"idmateria"})})
 * @ORM\Entity
 */
class Materiaciclo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="materiaciclo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * Set idciclo
     *
     * @param \BadBundle\Entity\Ciclo $idciclo
     * @return Materiaciclo
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

    /**
     * Set idmateria
     *
     * @param \BadBundle\Entity\Materia $idmateria
     * @return Materiaciclo
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
