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
		 
        $month = $today->format('m');
        $year = $today->format('Y');
         
	//check if budget percent is set
		$repository = $this->em->getRepository('AppBundle:BudgetPercent');
			
		$query = $repository->createQueryBuilder('p')
			->where('p.year = :year')
			->setParameter('year', $year)
			->andWhere('p.month = :month')
			->setParameter('month', $month)
			->andWhere('p.user = :user')
			->setParameter('user', $user)
			->getQuery();
				   
		$budgetPercent = $query->getResult();
		
		if ($budgetPercent == null) {
			
			return 1;
			
		}      
        
    }
    
}