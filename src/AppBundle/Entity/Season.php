<?php

namespace JIWorks\MaasCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Season
 *
 * @ORM\Table(name="season")
 * @ORM\Entity(repositoryClass="JIWorks\MaasCoreBundle\Repository\SeasonRepository")
 */
class Season
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
     * @var \DateTime
     *
     * @ORM\Column(name="beginning", type="date", unique=true)
     */
    private $beginning;

    /**
     * @ORM\OneToMany(targetEntity="Musician", mappedBy="season")
     */
    protected $musicians;

    /**
     * @ORM\OneToMany(targetEntity="Rehearsal", mappedBy="season")
     */
    protected $rehearsals;

    public function __construct()
    {
        $this->musicians = new ArrayCollection();
        $this->rehearsals = new ArrayCollection();
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
     * Set beginning
     *
     * @param \DateTime $beginning
     *
     * @return Season
     */
    public function setBeginning($beginning)
    {
        $this->beginning = $beginning;

        return $this;
    }

    /**
     * Get beginning
     *
     * @return \DateTime
     */
    public function getBeginning()
    {
        return $this->beginning;
    }
}

