<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciclo
 *
 * @ORM\Table(name="ciclo", uniqueConstraints={@ORM\UniqueConstraint(name="ciclo_pk", columns={"id"})}, indexes={@ORM\Index(name="se_divide_fk", columns={"idanio"})})
 * @ORM\Entity
 */
class Ciclo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ciclo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=254, nullable=false)
     */
    private $nombre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechainicio", type="date", nullable=false)
     */
    private $fechainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafin", type="date", nullable=false)
     */
    private $fechafin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado;

    /**
     * @var \Anioelectivo
     *
     * @ORM\ManyToOne(targetEntity="Anioelectivo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idanio", referencedColumnName="idanio")
     * })
     */
    private $idanio;



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
     * @return Ciclo
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
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return Ciclo
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return Ciclo
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     * @return Ciclo
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idanio
     *
     * @param \BadBundle\Entity\Anioelectivo $idanio
     * @return Ciclo
     */
    public function setIdanio(\BadBundle\Entity\Anioelectivo $idanio = null)
    {
        $this->idanio = $idanio;

        return $this;
    }

    /**
     * Get idanio
     *
     * @return \BadBundle\Entity\Anioelectivo 
     */
    public function getIdanio()
    {
        return $this->idanio;
    }
}
