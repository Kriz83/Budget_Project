<?php

namespace AppBundle\Entity;

/**
 * CostType
 */
class CostType
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $name;


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
     * @param integer $name
     *
     * @return CostType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $monthlyCost;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->monthlyCost = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add monthlyCost
     *
     * @param \AppBundle\Entity\MonthlyCosts $monthlyCost
     *
     * @return CostType
     */
    public function addMonthlyCost(\AppBundle\Entity\MonthlyCosts $monthlyCost)
    {
        $this->monthlyCost[] = $monthlyCost;

        return $this;
    }

    /**
     * Remove monthlyCost
     *
     * @param \AppBundle\Entity\MonthlyCosts $monthlyCost
     */
    public function removeMonthlyCost(\AppBundle\Entity\MonthlyCosts $monthlyCost)
    {
        $this->monthlyCost->removeElement($monthlyCost);
    }

    /**
     * Get monthlyCost
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMonthlyCost()
    {
        return $this->monthlyCost;
    }
    /**
     * @var integer
     */
    private $typeOfCost;


    /**
     * Set typeOfCost
     *
     * @param integer $typeOfCost
     *
     * @return CostType
     */
    public function setTypeOfCost($typeOfCost)
    {
        $this->typeOfCost = $typeOfCost;

        return $this;
    }

    /**
     * Get typeOfCost
     *
     * @return integer
     */
    public function getTypeOfCost()
    {
        return $this->typeOfCost;
    }
}
