<?php

namespace AppBundle\Model\Income;

/*
*Income
*/
class Income
{
    
    private $em;
   
    public function __construct($em)
    {
      $this->em = $em;
    }
        
    /**
     * {@inheritdoc}
     */    
    public function addIncome($income, $form, $user)
    {
         
        $month = $form['month']->getData();
        $year = $form['year']->getData();
        $name = $form['name']->getData();
        $monthIncome = $form['monthIncome']->getData();
         
    //add new Income            
        $income->setMonthIncome($monthIncome);
        $income->setMonth($month);
        $income->setYear($year);
        $income->setName($name);
        $income->setUser($user);
        
        $this->em->persist($income);
        
        $this->em->flush();
                
        return 1;        
        
    }
            
    /**
     * {@inheritdoc}
     */    
    public function editIncome($positionCurrent, $activeCurrent, $userName)
	{
    
        
    }
    
}