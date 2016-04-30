<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catologopaquete
 *
 * @ORM\Table(name="catologopaquete", uniqueConstraints={@ORM\UniqueConstraint(name="catologopaquete_pk", columns={"id"}), @ORM\UniqueConstraint(name="tipopaquete", columns={"tipopaquete"})})
 * @ORM\Entity
 */
class Catologopaquete
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="catologopaquete_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipopaquete", type="string", length=254, nullable=false)
     */
    private $tipopaquete;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=254, nullable=false)
     */
    private $descripcion;



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
     * Set tipopaquete
     *
     * @param string $tipopaquete
     * @return Catologopaquete
     */
    public function setTipopaquete($tipopaquete)
    {
        $this->tipopaquete = $tipopaquete;

        return $this;
    }

    /**
     * Get tipopaquete
     *
     * @return string 
     */
    public function getTipopaquete()
    {
        return $this->tipopaquete;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Catologopaquete
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
}
