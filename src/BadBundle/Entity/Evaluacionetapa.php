<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluacionetapa
 *
 * @ORM\Table(name="evaluacionetapa", uniqueConstraints={@ORM\UniqueConstraint(name="evaluacionetapa_pk", columns={"id"})}, indexes={@ORM\Index(name="IDX_F7F0A1DF229B9DCA", columns={"iddocente"}), @ORM\Index(name="IDX_F7F0A1DFF937DDDD", columns={"idetapa"})})
 * @ORM\Entity
 */
class Evaluacionetapa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="evaluacionetapa_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Etapa
     *
     * @ORM\ManyToOne(targetEntity="Etapa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idetapa", referencedColumnName="id")
     * })
     */
    private $idetapa;



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
     * @return Evaluacionetapa
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
     * @return Evaluacionetapa
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
     * @return Evaluacionetapa
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
     * @return Evaluacionetapa
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
     * Set idetapa
     *
     * @param \BadBundle\Entity\Etapa $idetapa
     * @return Evaluacionetapa
     */
    public function setIdetapa(\BadBundle\Entity\Etapa $idetapa = null)
    {
        $this->idetapa = $idetapa;

        return $this;
    }

    /**
     * Get idetapa
     *
     * @return \BadBundle\Entity\Etapa 
     */
    public function getIdetapa()
    {
        return $this->idetapa;
    }
}
