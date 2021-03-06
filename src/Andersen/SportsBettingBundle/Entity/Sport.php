<?php

namespace Andersen\SportsBettingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sport
 *
 * @ORM\Table(name="sport")
 * @ORM\Entity(repositoryClass="Andersen\SportsBettingBundle\Repository\SportRepository")
 */
class Sport
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
     * @var string
     *
     * @ORM\Column(name="SportType", type="string", length=255)
     */
    private $sportType;

    /**
     * One Sport have Many Team.
     * @ORM\OneToMany(targetEntity="Andersen\SportsBettingBundle\Entity\Team", mappedBy="sport")
     */
    private $teams;


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
     * Set sportType
     *
     * @param string $sportType
     *
     * @return Sport
     */
    public function setSportType($sportType)
    {
        $this->sportType = $sportType;

        return $this;
    }

    /**
     * Get sportType
     *
     * @return string
     */
    public function getSportType()
    {
        return $this->sportType;
    }

    /**
     * Set teams
     *
     * @param string $teams
     *
     * @return Sport
     */
    public function setTeams($teams)
    {
        $this->teams = $teams;

        return $this;
    }

    /**
     * Get teams
     *
     * @return string
     */
    public function getTeams()
    {
        return $this->teams;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->teams = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add team
     *
     * @param \Andersen\SportsBettingBundle\Entity\Team $team
     *
     * @return Sport
     */
    public function addTeam(\Andersen\SportsBettingBundle\Entity\Team $team)
    {
        $this->teams[] = $team;

        return $this;
    }

    /**
     * Remove team
     *
     * @param \Andersen\SportsBettingBundle\Entity\Team $team
     */
    public function removeTeam(\Andersen\SportsBettingBundle\Entity\Team $team)
    {
        $this->teams->removeElement($team);
    }
}
