<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Docente
 *
 * @ORM\Table(name="docente", uniqueConstraints={@ORM\UniqueConstraint(name="docente_pk", columns={"id"}), @ORM\UniqueConstraint(name="nitdocente", columns={"nit"}), @ORM\UniqueConstraint(name="duidocente", columns={"dui"})}, indexes={@ORM\Index(name="utiliza_fk4", columns={"idusuario"}), @ORM\Index(name="recide_fk4", columns={"iddireccion"}), @ORM\Index(name="IDX_FD9FCFA4E67369E6", columns={"idjefe"})})
 * @ORM\Entity
 */
class Docente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="docente_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Docente
     *
     * @ORM\ManyToOne(targetEntity="Docente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idjefe", referencedColumnName="id")
     * })
     */
    private $idjefe;

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
     * @return Docente
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
     * @return Docente
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
     * @return Docente
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
     * @return Docente
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
     * @return Docente
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
     * @return Docente
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
     * @return Docente
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
     * Set idjefe
     *
     * @param \BadBundle\Entity\Docente $idjefe
     * @return Docente
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

    /**
     * Set iddireccion
     *
     * @param \BadBundle\Entity\Direccion $iddireccion
     * @return Docente
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
     * @return Docente
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
