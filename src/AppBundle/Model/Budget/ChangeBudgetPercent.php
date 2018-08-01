<?php

namespace AppBundle\Model\Budget;
use AppBundle\Entity\BudgetPercent;

/*
* ChangeBudgetPercent
*/
class ChangeBudgetPercent
{
    
    private $em;
   
    public function __construct($em)
    {
      $this->em = $em;
    }
	
	    
    /**
     * {@inheritdoc}
     */    
    public function getBudgetPercentData($user)
    {
		     
        $today = new \Datetime();
		 
        $month = intval($today->format('m'));
        $year = intval($today->format('Y'));
        	
        $currentBudgetPercent = $this->em->
            getRepository('AppBundle:BudgetPercent')
            ->findOneByUserYearMonth($user);
		
		return $currentBudgetPercent;
		
    }
        
    /**
     * {@inheritdoc}
     */    
    public function changeBudgetPercent($form, $budgetPercent)
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
		
        //add new BudgetPercent 
		
        $budgetPercent->setFinanceFreedom($financeFreedom);
        $budgetPercent->setMoneyBoxFreedom($moneyBoxFreedom);
        $budgetPercent->setCurrentExpensesTransport($currentExpensesTransport);
        $budgetPercent->setCurrentExpensesFood($currentExpensesFood);
        $budgetPercent->setCurrentExpensesHome($currentExpensesHome);
        $budgetPercent->setLongTermForFutureExpenses($longTermForFutureExpenses);
        $budgetPercent->setPleasureAccount($pleasureAccount);
		$budgetPercent->setEducationAccount($educationAccount);
		$budgetPercent->setHelpOthersAccount($helpOthersAccount);
		
		
        $this->em->persist($budgetPercent);
        
        $this->em->flush();   
        return 1;     
        
    }
    
}