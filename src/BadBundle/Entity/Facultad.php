<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facultad
 *
 * @ORM\Table(name="facultad", uniqueConstraints={@ORM\UniqueConstraint(name="nombrefacultad", columns={"nombre"}), @ORM\UniqueConstraint(name="codigofacultad", columns={"codigo"}), @ORM\UniqueConstraint(name="facultad_pk", columns={"id"})})
 * @ORM\Entity
 */
class Facultad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="facultad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=254, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=254, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="decano", type="string", length=254, nullable=false)
     */
    private $decano;



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
     * Set codigo
     *
     * @param string $codigo
     * @return Facultad
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Facultad
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
     * Set decano
     *
     * @param string $decano
     * @return Facultad
     */
    public function setDecano($decano)
    {
        $this->decano = $decano;

        return $this;
    }

    /**
     * Get decano
     *
     * @return string 
     */
    public function getDecano()
    {
        return $this->decano;
    }
}
