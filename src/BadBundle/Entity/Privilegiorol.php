<?php

namespace BadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Privilegiorol
 *
 * @ORM\Table(name="privilegiorol", uniqueConstraints={@ORM\UniqueConstraint(name="pkprivilegiorol", columns={"id"}), @ORM\UniqueConstraint(name="privilegio_rol", columns={"idprivilegio", "idrol"})}, indexes={@ORM\Index(name="IDX_10B7B2E81D48F76B", columns={"idprivilegio"}), @ORM\Index(name="IDX_10B7B2E817506450", columns={"idrol"})})
 * @ORM\Entity
 */
class Privilegiorol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="privilegiorol_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Privilegio
     *
     * @ORM\ManyToOne(targetEntity="Privilegio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idprivilegio", referencedColumnName="id")
     * })
     */
    private $idprivilegio;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idprivilegio
     *
     * @param \BadBundle\Entity\Privilegio $idprivilegio
     * @return Privilegiorol
     */
    public function setIdprivilegio(\BadBundle\Entity\Privilegio $idprivilegio = null)
    {
        $this->idprivilegio = $idprivilegio;

        return $this;
    }

    /**
     * Get idprivilegio
     *
     * @return \BadBundle\Entity\Privilegio 
     */
    public function getIdprivilegio()
    {
        return $this->idprivilegio;
    }

    /**
     * Set idrol
     *
     * @param \BadBundle\Entity\Rol $idrol
     * @return Privilegiorol
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
}
