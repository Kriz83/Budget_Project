<?php

namespace AppBundle\Entity;

/**
 * MonthlyCosts
 */
class MonthlyCosts
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $userId;

    /**
     * @var int
     */
    private $month;

    /**
     * @var int
     */
    private $year;

    /**
     * @var \DateTime
     */
    private $addDate;

    /**
     * @var int
     */
    private $category;

    /**
     * @var int
     */
    private $costType;


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
     * Set userId
     *
     * @param integer $userId
     *
     * @return MonthlyCosts
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set month
     *
     * @param integer $month
     *
     * @return MonthlyCosts
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get month
     *
     * @return int
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return MonthlyCosts
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set addDate
     *
     * @param \DateTime $addDate
     *
     * @return MonthlyCosts
     */
    public function setAddDate($addDate)
    {
        $this->addDate = $addDate;

        return $this;
    }

    /**
     * Get addDate
     *
     * @return \DateTime
     */
    public function getAddDate()
    {
        return $this->addDate;
    }

    /**
     * Set category
     *
     * @param integer $category
     *
     * @return MonthlyCosts
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set costType
     *
     * @param integer $costType
     *
     * @return MonthlyCosts
     */
    public function setCostType($costType)
    {
        $this->costType = $costType;

        return $this;
    }

    /**
     * Get costType
     *
     * @return int
     */
    public function getCostType()
    {
        return $this->costType;
    }
    /**
     * @var \AppBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return MonthlyCosts
     */
    public function setUser(\AppBundle\Entity\User $user = null)
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
     * @var \AppBundle\Entity\Subcategory
     */
    private $subcategory;


    /**
     * Set subcategory
     *
     * @param \AppBundle\Entity\Subcategory $subcategory
     *
     * @return MonthlyCosts
     */
    public function setSubcategory(\AppBundle\Entity\Subcategory $subcategory = null)
    {
        $this->subcategory = $subcategory;

        return $this;
    }

    /**
     * Get subcategory
     *
     * @return \AppBundle\Entity\Subcategory
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }
    /**
     * @var integer
     */
    private $costValue;


    /**
     * Set costValue
     *
     * @param integer $costValue
     *
     * @return MonthlyCosts
     */
    public function setCostValue($costValue)
    {
        $this->costValue = $costValue;

        return $this;
    }

    /**
     * Get costValue
     *
     * @return integer
     */
    public function getCostValue()
    {
        return $this->costValue;
    }
    /**
     * @var string
     */
    private $name;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return MonthlyCosts
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
