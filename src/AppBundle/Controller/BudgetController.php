<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\Budget\PanelFormType;
use AppBundle\Form\Budget\AddBudgetPercentFormType;
use AppBundle\Form\Budget\ChangeBudgetPercentFormType;

use AppBundle\Model\Budget\AddBudgetPercent;
use AppBundle\Model\Budget\ChangeBudgetPercent;

use AppBundle\Entity\MonthlyAsset;

class BudgetController extends Controller
{   
        
    /**
    * @Route("/showBudget", name="showBudget")
    *
    * Shows general budget data for user
    *
    */
    public function showBudgetAction(Request $request)
    {       
        //get form of buttons
        $form = $this->createForm(PanelFormType::class);
        
        //handle request
        $form->handleRequest($request);
        //redirect depend on clicked button
        if ($form->isSubmitted() && $form->isValid()) {
    
            if ($form->get('addIncome')->isClicked()) {                
                return $this->redirectToRoute('addIncome', array(
                ));            
            }
                    
            if ($form->get('changeMonthlyPercent')->isClicked()) {                
                return $this->redirectToRoute('changeMonthlyPercent', array(
                ));            
            }    
            
            if ($form->get('addCost')->isClicked()) { 
                return $this->redirectToRoute('addCost', array(
                ));            
            }             
        }
    
        return $this->render('budget\show\showBudget.html.twig', array(
            'form'    => $form->createView(),
        ));
    }  
   
	/**
    * @Route("/addBudgetPercent", name="addBudgetPercent")
    *
    * Add percentage of each of cost to save a goal for concrete mont
    *
    */
    public function addBudgetPercentAction(Request $request)
    {
        //get doctrine manager
        $em = $this->getDoctrine()->getManager();
		
        //get user	
		$user = $this->container->get('security.token_storage')->getToken()->getUser();
		
        $form = $this->createForm(AddBudgetPercentFormType::class);      
        
        //handle request
        $form->handleRequest($request);
        
        //add data to db when form is submitted
        if ($form->isSubmitted() && $form->isValid()) {
         
			$budgetPercent = new AddBudgetPercent($em);
			$addBudgetPercent = $budgetPercent->addBudgetPercent($form, $user);
			
			$this->addFlash("success", 'Success - new budget Goal was saved!');
			
			return $this->redirectToRoute('showBudget');
            
        }
    
        return $this->render('budget\add\addBudgetPercent.html.twig', array(
            'form'    => $form->createView(),
        ));
    }	
	
	/**
    * @Route("/changeMonthlyPercent", name="changeMonthlyPercent")
    *
    * Add percentage of each of cost to save a goal for concrete mont
    *
    */
    public function changeMonthlyPercentAction(Request $request)
    {
        //get doctrine manager
        $em = $this->getDoctrine()->getManager();
		
        //get user	
        $user = $this->container->get('security.token_storage')->getToken()->getUser()->getId();
       
        //get current data
		$changeBudgetPercent = new ChangeBudgetPercent($em);
        $currentBudgetPercent = $changeBudgetPercent->getBudgetPercentData($user);
        
        //set form
        $form = $this->createForm(ChangeBudgetPercentFormType::class, $currentBudgetPercent);      
        
        //handle request
        $form->handleRequest($request);
        
        //add data to db when form is submitted
        if ($form->isSubmitted() && $form->isValid()) {                   
			$changeBudgetPercent = $changeBudgetPercent->changeBudgetPercent($form, $currentBudgetPercent);
			
			$this->addFlash("success", 'Success - new budget Goal was saved!');
			
			return $this->redirectToRoute('showBudget');            
        }
    
        return $this->render('budget\edit\changeBudgetPercent.html.twig', array(
            'form'    => $form->createView(),
        ));
    }
	
}
