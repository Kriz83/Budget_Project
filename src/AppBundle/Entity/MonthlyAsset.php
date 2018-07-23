<?php

namespace AppBundle\Entity;

/**
 * MonthlyAsset
 */
class MonthlyAsset
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $monthIncome;

    /**
     * @var int
     */
    private $month;

    /**
     * @var int
     */
    private $year;


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
     * Set monthIncome
     *
     * @param integer $monthIncome
     *
     * @return MonthlyAsset
     */
    public function setMonthIncome($monthIncome)
    {
        $this->monthIncome = $monthIncome;

        return $this;
    }

    /**
     * Get monthIncome
     *
     * @return int
     */
    public function getMonthIncome()
    {
        return $this->monthIncome;
    }

    /**
     * Set month
     *
     * @param integer $month
     *
     * @return MonthlyAsset
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
     * @return MonthlyAsset
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
     * @var \AppBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return MonthlyAsset
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
     * @var string
     */
    private $name;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return MonthlyAsset
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
