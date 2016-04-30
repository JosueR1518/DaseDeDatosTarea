<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anioelectivo
 *
 * @ORM\Table(name="anioelectivo", uniqueConstraints={@ORM\UniqueConstraint(name="nombreanio", columns={"anio"}), @ORM\UniqueConstraint(name="anioelectivo_pk", columns={"idanio"})})
 * @ORM\Entity
 */
class Anioelectivo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idanio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="anioelectivo_idanio_seq", allocationSize=1, initialValue=1)
     */
    private $idanio;

    /**
     * @var integer
     *
     * @ORM\Column(name="anio", type="integer", nullable=false)
     */
    private $anio;



    /**
     * Get idanio
     *
     * @return integer 
     */
    public function getIdanio()
    {
        return $this->idanio;
    }

    /**
     * Set anio
     *
     * @param integer $anio
     * @return Anioelectivo
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return integer 
     */
    public function getAnio()
    {
        return $this->anio;
    }
}
