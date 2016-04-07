<?php

namespace JIWorks\MaasCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Musician
 *
 * @ORM\Table(name="musician")
 * @ORM\Entity(repositoryClass="JIWorks\MaasCoreBundle\Repository\MusicianRepository")
 */
class Musician
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
     * @ORM\ManyToOne(targetEntity="Person", inversedBy="musicians")
     * @ORM\JoinColumn(name="musician_id", referencedColumnName="id")
     */
    protected $person;

	/**
     * @ORM\ManyToOne(targetEntity="InstrumentType", inversedBy="musicians")
     * @ORM\JoinColumn(name="instrument_id", referencedColumnName="id")
     */
    protected $instrumentType;

	/**
     * @ORM\ManyToOne(targetEntity="Season", inversedBy="musicians")
     * @ORM\JoinColumn(name="season_id", referencedColumnName="id")
     */
    protected $season;

    /**
     * @ORM\OneToMany(targetEntity="Attendance", mappedBy="musician")
     */
    protected $attendances;

    /**
     * @ORM\ManyToMany(targetEntity="ExcuseType", inversedBy="musicians")
     * @ORM\JoinTable(name="musicians_excuseTypes")
     */
    protected $excuseTypes;

    public function __construct()
    {
        $this->attendances = new ArrayCollection();
        $this->excuseTypes = new ArrayCollection();
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

