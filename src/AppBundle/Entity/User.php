<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var int
     *
     * @ORM\Column(name="name", type="string" , length=255 , nullable=true)
     */
    private $name;

    /**
     *
     * @ORM\Column(name="tel", type="string" , length=255 , nullable=true)
     */
    private $tel;


    /**
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumn(name="ville_id", referencedColumnName="id")
     */
    private $ville;

    /**
     * @ORM\ManyToOne(targetEntity="Specialite")
     * @ORM\JoinColumn(name="specialite_id", referencedColumnName="id")
     */
    private $specialite;

    /**
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }

    private $doctor = false ;

    /**
     * @param bool $doctor
     */
    public function setDoctor($doctor)
    {
        $this->doctor = $doctor;
    }

    /**
     * @return mixed
     */
    public function isDoctor(): bool
    {
        return $this->doctor;
    }

    /**
     * @param int $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ville
     *
     * @param \AppBundle\Entity\Ville $ville
     *
     * @return User
     */
    public function setVille(\AppBundle\Entity\Ville $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \AppBundle\Entity\Ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set specialite
     *
     * @param \AppBundle\Entity\Specialite $specialite
     *
     * @return User
     */
    public function setSpecialite(\AppBundle\Entity\Specialite $specialite = null)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return \AppBundle\Entity\Specialite
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @ORM\Column(name="accroche", type="text" , nullable=true)
     */
    private $accroche;

    /**
     * Set accroche
     *
     * @param string $accroche
     *
     * @return User
     */
    public function setAccroche($accroche)
    {
        $this->accroche = $accroche;

        return $this;
    }

    /**
     * Get accroche
     *
     * @return string
     */
    public function getAccroche()
    {
        return $this->accroche;
    }


    /**
     * @ORM\Column(name="details", type="text" , nullable=true)
     */
    private $details;

    /**
     * Set details
     *
     * @param string $details
     *
     * @return User
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }
}
