<?php

namespace JIWorks\MaasCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rehearsal
 *
 * @ORM\Table(name="rehearsal")
 * @ORM\Entity(repositoryClass="JIWorks\MaasCoreBundle\Repository\RehearsalRepository")
 */
class Rehearsal
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
     * @ORM\ManyToOne(targetEntity="Season", inversedBy="rehearsals")
     * @ORM\JoinColumn(name="season_id", referencedColumnName="id")
     */
    protected $season;

	/**
     * @ORM\ManyToOne(targetEntity="Room", inversedBy="rehearsals")
     * @ORM\JoinColumn(name="room_id", referencedColumnName="id")
     */
    protected $room;

	/**
     * @ORM\ManyToOne(targetEntity="RehearsalType", inversedBy="rehearsals")
     * @ORM\JoinColumn(name="rehearsalType_id", referencedColumnName="id")
     */
    protected $rehearsalType;

    /**
     * @ORM\OneToMany(targetEntity="Attendance", mappedBy="musician")
     */
    protected $attendances;

    /**
     * @ORM\ManyToMany(targetEntity="Register", inversedBy="registers")
     * @ORM\JoinTable(name="rehearsals_registers")
     */
    protected $registers;

    public function __construct()
    {
        $this->attendances = new ArrayCollection();
        $this->registers = new ArrayCollection();
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
}

