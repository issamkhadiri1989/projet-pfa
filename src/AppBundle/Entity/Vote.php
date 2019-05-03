<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vote
 *
 * @ORM\Table(name="vote")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VoteRepository")
 */
class Vote
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="vote", type="integer")
     */
    private $vote;

    /**
     * Vote constructor.
     * @param int $vote
     */
    public function __construct()
    {
        $this->vote = 1;
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
     * Set vote
     *
     * @param integer $vote
     *
     * @return Vote
     */
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get vote
     *
     * @return int
     */
    public function getVote()
    {
        return $this->vote;
    }


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private  $docteur ;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private  $user ;

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Vote
     */
    public function setUser(\AppBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }



    /**
     * Set docteur
     *
     * @param \AppBundle\Entity\User $docteur
     *
     * @return Vote
     */
    public function setDocteur(\AppBundle\Entity\User $docteur)
    {
        $this->docteur = $docteur;

        return $this;
    }

    /**
     * Get docteur
     *
     * @return \AppBundle\Entity\User
     */
    public function getDocteur()
    {
        return $this->docteur;
    }
}
