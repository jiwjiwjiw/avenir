<?php

namespace JIWorks\MaasCoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExcuseType
 *
 * @ORM\Table(name="excuse_type")
 * @ORM\Entity(repositoryClass="JIWorks\MaasCoreBundle\Repository\ExcuseTypeRepository")
 */
class ExcuseType
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * @ORM\ManyToMany(targetEntity="Musician", mappedBy="excuseTypes")
     */
    protected $excuseTypes;

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
     * @return ExcuseType
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

