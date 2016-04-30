<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direccion
 *
 * @ORM\Table(name="direccion", uniqueConstraints={@ORM\UniqueConstraint(name="direccion_pk", columns={"id"})})
 * @ORM\Entity
 */
class Direccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="direccion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="colonia", type="string", length=254, nullable=false)
     */
    private $colonia;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=254, nullable=false)
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="pasaje", type="string", length=254, nullable=false)
     */
    private $pasaje;

    /**
     * @var string
     *
     * @ORM\Column(name="ncasa", type="string", length=254, nullable=false)
     */
    private $ncasa;



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
     * Set colonia
     *
     * @param string $colonia
     * @return Direccion
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }

    /**
     * Get colonia
     *
     * @return string 
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Set calle
     *
     * @param string $calle
     * @return Direccion
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string 
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set pasaje
     *
     * @param string $pasaje
     * @return Direccion
     */
    public function setPasaje($pasaje)
    {
        $this->pasaje = $pasaje;

        return $this;
    }

    /**
     * Get pasaje
     *
     * @return string 
     */
    public function getPasaje()
    {
        return $this->pasaje;
    }

    /**
     * Set ncasa
     *
     * @param string $ncasa
     * @return Direccion
     */
    public function setNcasa($ncasa)
    {
        $this->ncasa = $ncasa;

        return $this;
    }

    /**
     * Get ncasa
     *
     * @return string 
     */
    public function getNcasa()
    {
        return $this->ncasa;
    }
}
