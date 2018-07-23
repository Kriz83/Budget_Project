<?php

namespace AppBundle\Entity;

/**
 * BudgetPercent
 */
class BudgetPercent
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
    private $financeFreedom;

    /**
     * @var int
     */
    private $moneyBoxFreedom;

    /**
     * @var int
     */
    private $currentExpensesTransport;

    /**
     * @var int
     */
    private $currentExpensesFood;

    /**
     * @var int
     */
    private $currentExpensesHome;

    /**
     * @var int
     */
    private $longTermForFutureExpenses;

    /**
     * @var int
     */
    private $pleasureAccount;

    /**
     * @var int
     */
    private $educationAccount;

    /**
     * @var int
     */
    private $helpOthersAccount;

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
     * Set userId
     *
     * @param integer $userId
     *
     * @return BudgetPercent
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
     * Set financeFreedom
     *
     * @param integer $financeFreedom
     *
     * @return BudgetPercent
     */
    public function setFinanceFreedom($financeFreedom)
    {
        $this->financeFreedom = $financeFreedom;

        return $this;
    }

    /**
     * Get financeFreedom
     *
     * @return int
     */
    public function getFinanceFreedom()
    {
        return $this->financeFreedom;
    }

    /**
     * Set moneyBoxFreedom
     *
     * @param integer $moneyBoxFreedom
     *
     * @return BudgetPercent
     */
    public function setMoneyBoxFreedom($moneyBoxFreedom)
    {
        $this->moneyBoxFreedom = $moneyBoxFreedom;

        return $this;
    }

    /**
     * Get moneyBoxFreedom
     *
     * @return int
     */
    public function getMoneyBoxFreedom()
    {
        return $this->moneyBoxFreedom;
    }

    /**
     * Set currentExpensesTransport
     *
     * @param integer $currentExpensesTransport
     *
     * @return BudgetPercent
     */
    public function setCurrentExpensesTransport($currentExpensesTransport)
    {
        $this->currentExpensesTransport = $currentExpensesTransport;

        return $this;
    }

    /**
     * Get currentExpensesTransport
     *
     * @return int
     */
    public function getCurrentExpensesTransport()
    {
        return $this->currentExpensesTransport;
    }

    /**
     * Set currentExpensesFood
     *
     * @param integer $currentExpensesFood
     *
     * @return BudgetPercent
     */
    public function setCurrentExpensesFood($currentExpensesFood)
    {
        $this->currentExpensesFood = $currentExpensesFood;

        return $this;
    }

    /**
     * Get currentExpensesFood
     *
     * @return int
     */
    public function getCurrentExpensesFood()
    {
        return $this->currentExpensesFood;
    }

    /**
     * Set currentExpensesHome
     *
     * @param integer $currentExpensesHome
     *
     * @return BudgetPercent
     */
    public function setCurrentExpensesHome($currentExpensesHome)
    {
        $this->currentExpensesHome = $currentExpensesHome;

        return $this;
    }

    /**
     * Get currentExpensesHome
     *
     * @return int
     */
    public function getCurrentExpensesHome()
    {
        return $this->currentExpensesHome;
    }

    /**
     * Set longTermForFutureExpenses
     *
     * @param integer $longTermForFutureExpenses
     *
     * @return BudgetPercent
     */
    public function setLongTermForFutureExpenses($longTermForFutureExpenses)
    {
        $this->longTermForFutureExpenses = $longTermForFutureExpenses;

        return $this;
    }

    /**
     * Get longTermForFutureExpenses
     *
     * @return int
     */
    public function getLongTermForFutureExpenses()
    {
        return $this->longTermForFutureExpenses;
    }

    /**
     * Set pleasureAccount
     *
     * @param integer $pleasureAccount
     *
     * @return BudgetPercent
     */
    public function setPleasureAccount($pleasureAccount)
    {
        $this->pleasureAccount = $pleasureAccount;

        return $this;
    }

    /**
     * Get pleasureAccount
     *
     * @return int
     */
    public function getPleasureAccount()
    {
        return $this->pleasureAccount;
    }

    /**
     * Set educationAccount
     *
     * @param integer $educationAccount
     *
     * @return BudgetPercent
     */
    public function setEducationAccount($educationAccount)
    {
        $this->educationAccount = $educationAccount;

        return $this;
    }

    /**
     * Get educationAccount
     *
     * @return int
     */
    public function getEducationAccount()
    {
        return $this->educationAccount;
    }

    /**
     * Set helpOthersAccount
     *
     * @param integer $helpOthersAccount
     *
     * @return BudgetPercent
     */
    public function setHelpOthersAccount($helpOthersAccount)
    {
        $this->helpOthersAccount = $helpOthersAccount;

        return $this;
    }

    /**
     * Get helpOthersAccount
     *
     * @return int
     */
    public function getHelpOthersAccount()
    {
        return $this->helpOthersAccount;
    }

    /**
     * Set month
     *
     * @param integer $month
     *
     * @return BudgetPercent
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
     * @return BudgetPercent
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
    private $users;


    /**
     * Set users
     *
     * @param \AppBundle\Entity\User $users
     *
     * @return BudgetPercent
     */
    public function setUsers(\AppBundle\Entity\User $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \AppBundle\Entity\User
     */
    public function getUsers()
    {
        return $this->users;
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
     * @return BudgetPercent
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
}
