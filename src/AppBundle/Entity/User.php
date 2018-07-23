<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
    * @ORM\Column(type="string")
    */
    private $name;
	
	/**
    * @ORM\Column(type="string")
    */
    protected $username;
	
    public function getId()
    {
		
        return $this->id;
		
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
	
	 /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $budgetPercent;


    /**
     * Add budgetPercent
     *
     * @param \AppBundle\Entity\BudgetPercent $budgetPercent
     *
     * @return User
     */
    public function addBudgetPercent(\AppBundle\Entity\BudgetPercent $budgetPercent)
    {
        $this->budgetPercent[] = $budgetPercent;

        return $this;
    }

    /**
     * Remove budgetPercent
     *
     * @param \AppBundle\Entity\BudgetPercent $budgetPercent
     */
    public function removeBudgetPercent(\AppBundle\Entity\BudgetPercent $budgetPercent)
    {
        $this->budgetPercent->removeElement($budgetPercent);
    }

    /**
     * Get budgetPercent
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBudgetPercent()
    {
        return $this->budgetPercent;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $monthlyIncome;


    /**
     * Add monthlyIncome
     *
     * @param \AppBundle\Entity\MonthlyIncome $monthlyIncome
     *
     * @return User
     */
    public function addMonthlyIncome(\AppBundle\Entity\MonthlyIncome $monthlyIncome)
    {
        $this->monthlyIncome[] = $monthlyIncome;

        return $this;
    }

    /**
     * Remove monthlyIncome
     *
     * @param \AppBundle\Entity\MonthlyIncome $monthlyIncome
     */
    public function removeMonthlyIncome(\AppBundle\Entity\MonthlyIncome $monthlyIncome)
    {
        $this->monthlyIncome->removeElement($monthlyIncome);
    }

    /**
     * Get monthlyIncome
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMonthlyIncome()
    {
        return $this->monthlyIncome;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $monthlyCost;


    /**
     * Add monthlyCost
     *
     * @param \AppBundle\Entity\MonthlyCosts $monthlyCost
     *
     * @return User
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $monthlyAsset;


    /**
     * Add monthlyAsset
     *
     * @param \AppBundle\Entity\MonthlyAsset $monthlyAsset
     *
     * @return User
     */
    public function addMonthlyAsset(\AppBundle\Entity\MonthlyAsset $monthlyAsset)
    {
        $this->monthlyAsset[] = $monthlyAsset;

        return $this;
    }

    /**
     * Remove monthlyAsset
     *
     * @param \AppBundle\Entity\MonthlyAsset $monthlyAsset
     */
    public function removeMonthlyAsset(\AppBundle\Entity\MonthlyAsset $monthlyAsset)
    {
        $this->monthlyAsset->removeElement($monthlyAsset);
    }

    /**
     * Get monthlyAsset
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMonthlyAsset()
    {
        return $this->monthlyAsset;
    }
}
