<?php

namespace JIWorks\MaasCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attendance
 *
 * @ORM\Table(name="attendance")
 * @ORM\Entity(repositoryClass="JIWorks\MaasCoreBundle\Repository\AttendanceRepository")
 */
class Attendance
{
	/**
     * @ORM\ManyToOne(targetEntity="Musician", inversedBy="attendances")
     * @ORM\JoinColumn(name="musician_id", referencedColumnName="id")
     */
    protected $musician;

	/**
     * @ORM\ManyToOne(targetEntity="Rehearsal", inversedBy="attendances")
     * @ORM\JoinColumn(name="rehearsal_id", referencedColumnName="id")
     */
    protected $rehearsal;

	/**
     * @ORM\ManyToOne(targetEntity="AttendanceStatus", inversedBy="attendances")
     * @ORM\JoinColumn(name="attendanceStatus_id", referencedColumnName="id")
     */
    protected $attendanceStatus;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


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

