<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paquetepera
 *
 * @ORM\Table(name="paquetepera", uniqueConstraints={@ORM\UniqueConstraint(name="nombreperapaquete", columns={"nombre"}), @ORM\UniqueConstraint(name="paquetepera_pk", columns={"id"})}, indexes={@ORM\Index(name="se_conforma_fk2", columns={"idcatalogo"}), @ORM\Index(name="aprobada_fk2", columns={"iddirectorescuela"})})
 * @ORM\Entity
 */
class Paquetepera
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="paquetepera_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=254, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="unidadvalorativa", type="integer", nullable=false)
     */
    private $unidadvalorativa;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=254, nullable=false)
     */
    private $descripcion;

    /**
     * @var \Directorescuela
     *
     * @ORM\ManyToOne(targetEntity="Directorescuela")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddirectorescuela", referencedColumnName="id")
     * })
     */
    private $iddirectorescuela;

    /**
     * @var \Catologopaquete
     *
     * @ORM\ManyToOne(targetEntity="Catologopaquete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcatalogo", referencedColumnName="id")
     * })
     */
    private $idcatalogo;



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
     * @return Paquetepera
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
     * Set unidadvalorativa
     *
     * @param integer $unidadvalorativa
     * @return Paquetepera
     */
    public function setUnidadvalorativa($unidadvalorativa)
    {
        $this->unidadvalorativa = $unidadvalorativa;

        return $this;
    }

    /**
     * Get unidadvalorativa
     *
     * @return integer 
     */
    public function getUnidadvalorativa()
    {
        return $this->unidadvalorativa;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Paquetepera
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
     * Set iddirectorescuela
     *
     * @param \BadBundle\Entity\Directorescuela $iddirectorescuela
     * @return Paquetepera
     */
    public function setIddirectorescuela(\BadBundle\Entity\Directorescuela $iddirectorescuela = null)
    {
        $this->iddirectorescuela = $iddirectorescuela;

        return $this;
    }

    /**
     * Get iddirectorescuela
     *
     * @return \BadBundle\Entity\Directorescuela 
     */
    public function getIddirectorescuela()
    {
        return $this->iddirectorescuela;
    }

    /**
     * Set idcatalogo
     *
     * @param \BadBundle\Entity\Catologopaquete $idcatalogo
     * @return Paquetepera
     */
    public function setIdcatalogo(\BadBundle\Entity\Catologopaquete $idcatalogo = null)
    {
        $this->idcatalogo = $idcatalogo;

        return $this;
    }

    /**
     * Get idcatalogo
     *
     * @return \BadBundle\Entity\Catologopaquete 
     */
    public function getIdcatalogo()
    {
        return $this->idcatalogo;
    }
}
