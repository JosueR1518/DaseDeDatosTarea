<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estadopera
 *
 * @ORM\Table(name="estadopera", uniqueConstraints={@ORM\UniqueConstraint(name="estado_pera", columns={"idestudiante", "idpera"}), @ORM\UniqueConstraint(name="pk_estado_pera", columns={"id"})}, indexes={@ORM\Index(name="IDX_9229CE54F6962297", columns={"idestudiante"}), @ORM\Index(name="IDX_9229CE54F014CD51", columns={"idpera"})})
 * @ORM\Entity
 */
class Estadopera
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="estadopera_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=254, nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=254, nullable=false)
     */
    private $descripcion;

    /**
     * @var \Estudiante
     *
     * @ORM\ManyToOne(targetEntity="Estudiante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idestudiante", referencedColumnName="id")
     * })
     */
    private $idestudiante;

    /**
     * @var \Paquetepera
     *
     * @ORM\ManyToOne(targetEntity="Paquetepera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpera", referencedColumnName="id")
     * })
     */
    private $idpera;



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
     * Set estado
     *
     * @param string $estado
     * @return Estadopera
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Estadopera
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
     * Set idestudiante
     *
     * @param \BadBundle\Entity\Estudiante $idestudiante
     * @return Estadopera
     */
    public function setIdestudiante(\BadBundle\Entity\Estudiante $idestudiante = null)
    {
        $this->idestudiante = $idestudiante;

        return $this;
    }

    /**
     * Get idestudiante
     *
     * @return \BadBundle\Entity\Estudiante 
     */
    public function getIdestudiante()
    {
        return $this->idestudiante;
    }

    /**
     * Set idpera
     *
     * @param \BadBundle\Entity\Paquetepera $idpera
     * @return Estadopera
     */
    public function setIdpera(\BadBundle\Entity\Paquetepera $idpera = null)
    {
        $this->idpera = $idpera;

        return $this;
    }

    /**
     * Get idpera
     *
     * @return \BadBundle\Entity\Paquetepera 
     */
    public function getIdpera()
    {
        return $this->idpera;
    }
}
