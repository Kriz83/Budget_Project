<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\Cost\AddCostFormType;

use AppBundle\Model\Cost\Cost;

use AppBundle\Entity\MonthlyCosts;

class CostController extends Controller
{ 
    	
	/**
    * @Route("/addCost", name="addCost")
    *
    * Add cost for concrete month
    *
    */
    public function addCostAction(Request $request)
    {
    //get doctrine manager
        $em = $this->getDoctrine()->getManager();
		
	//get user	
		$user = $this->container->get('security.token_storage')->getToken()->getUser();
	//get cost types
		$addCost = new Cost($em);
		
		$costTypesArray = $addCost->getCostTypes();
	
    //create form
		$data = [];
		$data['costTypesArray'] = $costTypesArray;
	
        $form = $this->createForm(AddCostFormType::class, $data);      
        
    //handle request
        $form->handleRequest($request);
        
    //add data to db when form is submitted
        if ($form->isSubmitted() && $form->isValid()) {
            
		//create new cost object
            $cost = new MonthlyCosts;
		//add cost to db		
            $addNewCost = $addCost->addCost($cost, $form, $user);
			            
            if ($addNewCost === 1) {
                
                $this->addFlash("success", 'Success - new cost was saved!');
                
                return $this->redirectToRoute('showBudget');
                
            }
            
        }
    
        return $this->render('budget\add\addCost.html.twig', array(
            'form'    => $form->createView(),
        ));
    }

}
