<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Escuela
 *
 * @ORM\Table(name="escuela", uniqueConstraints={@ORM\UniqueConstraint(name="nombreescuela", columns={"nombre"}), @ORM\UniqueConstraint(name="escuela_pk", columns={"id"})}, indexes={@ORM\Index(name="tiene_fk", columns={"idfacultad"})})
 * @ORM\Entity
 */
class Escuela
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="escuela_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="direccion", type="string", length=254, nullable=false)
     */
    private $direccion;

    /**
     * @var \Facultad
     *
     * @ORM\ManyToOne(targetEntity="Facultad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idfacultad", referencedColumnName="id")
     * })
     */
    private $idfacultad;



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
     * @return Escuela
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
     * Set direccion
     *
     * @param string $direccion
     * @return Escuela
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set idfacultad
     *
     * @param \BadBundle\Entity\Facultad $idfacultad
     * @return Escuela
     */
    public function setIdfacultad(\BadBundle\Entity\Facultad $idfacultad = null)
    {
        $this->idfacultad = $idfacultad;

        return $this;
    }

    /**
     * Get idfacultad
     *
     * @return \BadBundle\Entity\Facultad 
     */
    public function getIdfacultad()
    {
        return $this->idfacultad;
    }
}
