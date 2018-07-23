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
		 
        $month = $today->format('m');
        $year = $today->format('Y');
		
		$repository = $this->em->getRepository('AppBundle:BudgetPercent');
			
		$query = $repository->createQueryBuilder('p')
			->where('p.year = :year')
			->setParameter('year', $year)
			->andWhere('p.month = :month')
			->setParameter('month', $month)
			->andWhere('p.user = :user')
			->setParameter('user', $user)
			->setMaxResults(1)
			->getQuery();
				   
		$currentBudgetPercent = $query->getOneOrNullResult();
		
		return $currentBudgetPercent;
		
    }
        
    /**
     * {@inheritdoc}
     */    
    public function changeBudgetPercent($form, $user)
    {
		     
        
    }
    
}