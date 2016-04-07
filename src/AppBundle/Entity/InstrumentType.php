<?php

namespace JIWorks\MaasCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InstrumentType
 *
 * @ORM\Table(name="instrument_type")
 * @ORM\Entity(repositoryClass="JIWorks\MaasCoreBundle\Repository\InstrumentTypeRepository")
 */
class InstrumentType
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
     * @ORM\ManyToOne(targetEntity="Register", inversedBy="instruments")
     * @ORM\JoinColumn(name="register_id", referencedColumnName="id")
     */
    protected $register;

    /**
     * @ORM\OneToMany(targetEntity="Musician", mappedBy="instrument")
     */
    protected $musicians;

    public function __construct()
    {
        $this->musicians = new ArrayCollection();
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
     * @return InstrumentType
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

