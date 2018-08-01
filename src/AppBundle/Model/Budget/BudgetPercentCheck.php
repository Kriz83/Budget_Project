<?php

namespace AppBundle\Model\Budget;
use AppBundle\Entity\BudgetPercent;

/*
*BudgetPercentCheck
*/
class BudgetPercentCheck
{
    
    private $em;
   
    public function __construct($em)
    {
      $this->em = $em;
    }
 		
    /**
     * {@inheritdoc}
     */    
    public function checkIsBudgetPercentIsSet($user)
    {
		$today = new \Datetime();
		 
        $month = intval($today->format('m'));
        $year = intval($today->format('Y'));
        
		//check if budget percent is set		
		$budgetPercent = $this->em->
			getRepository('AppBundle:BudgetPercent')
			->findByUserYearMonth($user);
		
		if ($budgetPercent != null) {			
			return 1;			
		}      
        
    }
    
}