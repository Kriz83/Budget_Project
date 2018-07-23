<?php

namespace AppBundle\Model\Cost;
use AppBundle\Entity\CostType;

/*
*Cost
*/
class Cost
{
    
    private $em;
   
    public function __construct($em)
    {
      $this->em = $em;
    }
	
	/**
     * {@inheritdoc}
     */    
    public function getCostTypes()
    {
         
       $costTypes = $this->em
			->getRepository('AppBundle:CostType')
			->findAll();
			
		$costTypesArray = [];
		
		foreach ($costTypes as $cType) {
			
			$id = $cType->getId();
			$costTypeName = $cType->getName();
			
			$costTypesArray[$costTypeName] = $id;
			
		}
                
        return $costTypesArray;
        
    }
        
    /**
     * {@inheritdoc}
     */    
    public function addCost($cost, $form, $user)
    {
         
        $month = $form['month']->getData();
        $year = $form['year']->getData();
        $name = $form['name']->getData();
        $costValue = $form['costValue']->getData();
        $costType = $form['costType']->getData();
		$addDate = new \DateTime();
		
	//get cost type object
		$costType = $this->em
			->getRepository('AppBundle:CostType')
			->findOneById($costType);
         
    //add new Cost            
        $cost->setCostValue($costValue);
        $cost->setMonth($month);
        $cost->setYear($year);
        $cost->setName($name);
        $cost->setUser($user);
        $cost->setCostType($costType);
        $cost->setAddDate($addDate);
        
        $this->em->persist($cost);
        
        $this->em->flush();
                
        return 1;        
        
    }
 
    
}