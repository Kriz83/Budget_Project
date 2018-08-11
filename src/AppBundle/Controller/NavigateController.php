<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Model\Budget\BudgetPercentCheck;

class NavigateController extends Controller
{
    /**
    * @Route("/", name="homepage")
    */
    public function indexAction(Request $request)
    {
        //get doctrine manager
        $em = $this->getDoctrine()->getManager();
	    //get user	
		$user = $this->container->get('security.token_storage')->getToken()->getUser();

	    //if user is logged - check if percent for current month is set
		if ($user !== 'anon.') {

			$budgetPercentCheck = new BudgetPercentCheck($em);
			
			$checkIsAdded = $budgetPercentCheck->checkIsBudgetPercentIsSet($user);
			//if budget for current month is not passed to db yet
			if ($checkIsAdded !== 1) {				
				return $this->redirectToRoute('addBudgetPercent', array(
                ));				
			}
		}		
		
        return $this->render('budget/index.html.twig', [
        ]);
    }
	
}
