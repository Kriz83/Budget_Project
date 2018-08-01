<?php

namespace AppBundle\Form\Budget;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class AddBudgetPercentFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		
        $currentDate    = new \DateTime();
        $currentYear    = intval($currentDate->format('Y'));
        $currentMonth   = intval($currentDate->format('m'));
        $months = [];
        $i = 1;
        $monthName = '';
        
    //create array of months
        for ($i; $i <= 12; $i++) {
            
            $monthName = \DateTime::createFromFormat('!m', $i)->format('F');
            $months[$monthName] = $i;
            
        }
		        
        $builder            
            ->add('xfinanceFreedom' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'readonly' => true,),
                    'label' => 'Finance freedom account :',
                    'required' => true,
                
            ))
            ->add('xmoneyBoxFreedom' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'readonly' => true,),
                    'label' => 'Freedom money box :',
                    'required' => true,
                
            ))
            ->add('xcurrentExpensesTransport' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'readonly' => true,),
                    'label' => 'Current expenses transport :',
                    'required' => true,
                
            ))
            ->add('xcurrentExpensesFood' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'readonly' => true,),
                    'label' => 'Current expenses food :',
                    'required' => true,
                
            ))
            ->add('xcurrentExpensesHome' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'readonly' => true,),
                    'label' => 'Current expenses home :',
                    'required' => true,
                
            ))
            ->add('xlongTermForFutureExpenses' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'readonly' => true,),
                    'label' => 'Long term future expenses :',
                    'required' => true,
                
            ))
            ->add('xpleasureAccount' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'readonly' => true,),
                    'label' => 'Pleasure account :',
                    'required' => true,
                
            ))
            ->add('xeducationAccount' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'readonly' => true,),
                    'label' => 'Education account :',
                    'required' => true,
                
            ))
            ->add('xhelpOthersAccount' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'readonly' => true,),
                    'label' => 'Help others account :',
                    'required' => true,
                
            ))
            ->add('month' , ChoiceType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
                        'style' => 'color:black; font-size:14px; margin-bottom:10px; text-transform: uppercase; border: 1px solid gold; width:250px; height:40px',
						'readonly' => true,),
                    'label' => 'Month :',
                    'choices' => array(
                        $months,),
                    'required' => true,  
                    'data' => $currentMonth,                  
            ))
            ->add('year' , TextType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
                        'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',	
                        'readonly' => true,),
                    'label' => 'Year :',
                    'required' => true,
                    'data' => $currentYear,
            ));
    }
}