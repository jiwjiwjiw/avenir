<?php

namespace JIWorks\MaasCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RehearsalType
 *
 * @ORM\Table(name="rehearsal_type")
 * @ORM\Entity(repositoryClass="JIWorks\MaasCoreBundle\Repository\RehearsalTypeRepository")
 */
class RehearsalType
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Rehearsal", mappedBy="rehearsalType")
     */
    protected $rehearsals;

    public function __construct()
    {
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
     * Set name
     *
     * @param string $name
     *
     * @return RehearsalType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

