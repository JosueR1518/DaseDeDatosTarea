<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 *
 * @ORM\Table(name="departamento", uniqueConstraints={@ORM\UniqueConstraint(name="nombredepto", columns={"nombre"}), @ORM\UniqueConstraint(name="codigodepto", columns={"codigo"}), @ORM\UniqueConstraint(name="departamento_pk", columns={"id"}), @ORM\UniqueConstraint(name="jefedepto", columns={"idjefe"})}, indexes={@ORM\Index(name="se_agrega_de_fk", columns={"idescuela"})})
 * @ORM\Entity
 */
class Departamento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="departamento_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Escuela
     *
     * @ORM\ManyToOne(targetEntity="Escuela")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idescuela", referencedColumnName="id")
     * })
     */
    private $idescuela;

    /**
     * @var \Docente
     *
     * @ORM\ManyToOne(targetEntity="Docente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idjefe", referencedColumnName="id")
     * })
     */
    private $idjefe;



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
     * @return Departamento
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
     * @return Departamento
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
     * Set idescuela
     *
     * @param \BadBundle\Entity\Escuela $idescuela
     * @return Departamento
     */
    public function setIdescuela(\BadBundle\Entity\Escuela $idescuela = null)
    {
        $this->idescuela = $idescuela;

        return $this;
    }

    /**
     * Get idescuela
     *
     * @return \BadBundle\Entity\Escuela 
     */
    public function getIdescuela()
    {
        return $this->idescuela;
    }

    /**
     * Set idjefe
     *
     * @param \BadBundle\Entity\Docente $idjefe
     * @return Departamento
     */
    public function setIdjefe(\BadBundle\Entity\Docente $idjefe = null)
    {
        $this->idjefe = $idjefe;

        return $this;
    }

    /**
     * Get idjefe
     *
     * @return \BadBundle\Entity\Docente 
     */
    public function getIdjefe()
    {
        return $this->idjefe;
    }
}
