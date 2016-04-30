<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Directorescuela
 *
 * @ORM\Table(name="directorescuela", uniqueConstraints={@ORM\UniqueConstraint(name="nitdirector", columns={"nit"}), @ORM\UniqueConstraint(name="directorescuela_pk", columns={"id"}), @ORM\UniqueConstraint(name="duidirector", columns={"dui"})}, indexes={@ORM\Index(name="recide_fk2", columns={"iddireccion"}), @ORM\Index(name="utiliza_fk2", columns={"idusuario"}), @ORM\Index(name="dirige_una_fk", columns={"idescuela"})})
 * @ORM\Entity
 */
class Directorescuela
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="directorescuela_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="apellido", type="string", length=254, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="dui", type="string", length=254, nullable=false)
     */
    private $dui;

    /**
     * @var string
     *
     * @ORM\Column(name="nit", type="string", length=254, nullable=false)
     */
    private $nit;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=254, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=254, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechanacimiento", type="date", nullable=false)
     */
    private $fechanacimiento;

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
     * @var \Direccion
     *
     * @ORM\ManyToOne(targetEntity="Direccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddireccion", referencedColumnName="id")
     * })
     */
    private $iddireccion;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuario", referencedColumnName="id")
     * })
     */
    private $idusuario;



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
     * @return Directorescuela
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
     * Set apellido
     *
     * @param string $apellido
     * @return Directorescuela
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set dui
     *
     * @param string $dui
     * @return Directorescuela
     */
    public function setDui($dui)
    {
        $this->dui = $dui;

        return $this;
    }

    /**
     * Get dui
     *
     * @return string 
     */
    public function getDui()
    {
        return $this->dui;
    }

    /**
     * Set nit
     *
     * @param string $nit
     * @return Directorescuela
     */
    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get nit
     *
     * @return string 
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Directorescuela
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Directorescuela
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fechanacimiento
     *
     * @param \DateTime $fechanacimiento
     * @return Directorescuela
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get fechanacimiento
     *
     * @return \DateTime 
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set idescuela
     *
     * @param \BadBundle\Entity\Escuela $idescuela
     * @return Directorescuela
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
     * Set iddireccion
     *
     * @param \BadBundle\Entity\Direccion $iddireccion
     * @return Directorescuela
     */
    public function setIddireccion(\BadBundle\Entity\Direccion $iddireccion = null)
    {
        $this->iddireccion = $iddireccion;

        return $this;
    }

    /**
     * Get iddireccion
     *
     * @return \BadBundle\Entity\Direccion 
     */
    public function getIddireccion()
    {
        return $this->iddireccion;
    }

    /**
     * Set idusuario
     *
     * @param \BadBundle\Entity\Usuario $idusuario
     * @return Directorescuela
     */
    public function setIdusuario(\BadBundle\Entity\Usuario $idusuario = null)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return \BadBundle\Entity\Usuario 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }
}
