<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\Income\AddIncomeFormType;

use AppBundle\Model\Income\Income;

use AppBundle\Entity\MonthlyAsset;

class IncomeController extends Controller
{
    
    /**
    * @Route("/addIncome", name="addIncome")
    *
    * Add income for concrete month
    *
    */
    public function addIncomeAction(Request $request)
    {
        //get doctrine manager
        $em = $this->getDoctrine()->getManager();
	//get user	
		$user = $this->container->get('security.token_storage')->getToken()->getUser();

        //create form
        $form = $this->createForm(AddIncomeFormType::class);        
        
        //handle request
        $form->handleRequest($request);
        
        //add data to db when form is submitted
        if ($form->isSubmitted() && $form->isValid()) {
            
            $addIncome = new Income($em);
            
            $income = new MonthlyAsset;
            
            $addNewAsset = $addIncome->addIncome($income, $form, $user);
            
            if ($addNewAsset === 1) {               
                $success = 'Success - new income was saved!';
                
                return $this->redirectToRoute('showBudget', array(
                    'success'    => $success,
                ));                
            }            
        }
    
        return $this->render('budget\add\addIncome.html.twig', array(
            'form'    => $form->createView(),
        ));
    }
	
}
