<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rolusuario
 *
 * @ORM\Table(name="rolusuario", uniqueConstraints={@ORM\UniqueConstraint(name="rol_usuario", columns={"idrol", "idusuario"}), @ORM\UniqueConstraint(name="pkrolusuario", columns={"id"})}, indexes={@ORM\Index(name="IDX_AAA1A97117506450", columns={"idrol"}), @ORM\Index(name="IDX_AAA1A971FD61E233", columns={"idusuario"})})
 * @ORM\Entity
 */
class Rolusuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rolusuario_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Rol
     *
     * @ORM\ManyToOne(targetEntity="Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idrol", referencedColumnName="id")
     * })
     */
    private $idrol;

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
     * Set idrol
     *
     * @param \BadBundle\Entity\Rol $idrol
     * @return Rolusuario
     */
    public function setIdrol(\BadBundle\Entity\Rol $idrol = null)
    {
        $this->idrol = $idrol;

        return $this;
    }

    /**
     * Get idrol
     *
     * @return \BadBundle\Entity\Rol 
     */
    public function getIdrol()
    {
        return $this->idrol;
    }

    /**
     * Set idusuario
     *
     * @param \BadBundle\Entity\Usuario $idusuario
     * @return Rolusuario
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
