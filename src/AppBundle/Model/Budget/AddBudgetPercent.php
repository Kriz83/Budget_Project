<?php

namespace AppBundle\Model\Budget;
use AppBundle\Entity\BudgetPercent;

/*
*AddBudgetPercent
*/
class AddBudgetPercent
{
    
    private $em;
   
    public function __construct($em)
    {
      $this->em = $em;
    }
        
    /**
     * {@inheritdoc}
     */    
    public function addBudgetPercent($form, $user)
    {
		
        $financeFreedom = $form['financeFreedom']->getData();
        $moneyBoxFreedom = $form['moneyBoxFreedom']->getData();
        $currentExpensesTransport = $form['currentExpensesTransport']->getData();
        $currentExpensesFood = $form['currentExpensesFood']->getData();
        $currentExpensesHome = $form['currentExpensesHome']->getData();
        $longTermForFutureExpenses = $form['longTermForFutureExpenses']->getData();
        $pleasureAccount = $form['pleasureAccount']->getData();
        $educationAccount = $form['educationAccount']->getData();
        $helpOthersAccount = $form['helpOthersAccount']->getData();
        $month = $form['month']->getData();
        $year = $form['year']->getData();
		
        //add new BudgetPercent 

		$budgetPercent = new BudgetPercent;
		
        $budgetPercent->setUser($user);
        $budgetPercent->setFinanceFreedom($financeFreedom);
        $budgetPercent->setMoneyBoxFreedom($moneyBoxFreedom);
        $budgetPercent->setCurrentExpensesTransport($currentExpensesTransport);
        $budgetPercent->setCurrentExpensesFood($currentExpensesFood);
        $budgetPercent->setCurrentExpensesHome($currentExpensesHome);
        $budgetPercent->setLongTermForFutureExpenses($longTermForFutureExpenses);
        $budgetPercent->setPleasureAccount($pleasureAccount);
		$budgetPercent->setEducationAccount($educationAccount);
		$budgetPercent->setHelpOthersAccount($helpOthersAccount);
		$budgetPercent->setMonth($month);
		$budgetPercent->setYear($year);
		
		
        $this->em->persist($budgetPercent);
        
        $this->em->flush();
                
        return 1;  
		
    }
    
}