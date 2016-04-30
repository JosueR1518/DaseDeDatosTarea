<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluacionmateria
 *
 * @ORM\Table(name="evaluacionmateria", uniqueConstraints={@ORM\UniqueConstraint(name="evaluacionmateria_pk", columns={"id"}), @ORM\UniqueConstraint(name="nombreevaluacionmateria", columns={"nombre", "idmateria"})}, indexes={@ORM\Index(name="se_evalua_fk", columns={"idmateria"}), @ORM\Index(name="IDX_D97151B8229B9DCA", columns={"iddocente"})})
 * @ORM\Entity
 */
class Evaluacionmateria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="evaluacionmateria_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=254, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=254, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="porcentaje", type="decimal", precision=254, scale=0, nullable=false)
     */
    private $porcentaje;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Evaluacionmateria
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Evaluacionmateria
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
     * Set porcentaje
     *
     * @param string $porcentaje
     * @return Evaluacionmateria
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }

    /**
     * Get porcentaje
     *
     * @return string 
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * Set iddocente
     *
     * @param \BadBundle\Entity\Docente $iddocente
     * @return Evaluacionmateria
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
     * Set idmateria
     *
     * @param \BadBundle\Entity\Materia $idmateria
     * @return Evaluacionmateria
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
