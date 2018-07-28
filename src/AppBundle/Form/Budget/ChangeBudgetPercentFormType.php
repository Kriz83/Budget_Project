<?php

namespace AppBundle\Form\Budget;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ChangeBudgetPercentFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $months = [];
        $i = 1;
        $monthName = '';
        
    //create array of months
        for ($i; $i <= 12; $i++) {
            
            $monthName = \DateTime::createFromFormat('!m', $i)->format('F');
            $months[$monthName] = $i;
            
        }
		        
        $builder            
            ->add('financeFreedom' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'disabled' => 'disabled',),
                    'label' => 'Finance freedom account :',
                    'required' => true,
                
            ))
            ->add('moneyBoxFreedom' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'disabled' => 'disabled',),
                    'label' => 'Freedom money box :',
                    'required' => true,
                
            ))
            ->add('currentExpensesTransport' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'disabled' => 'disabled',),
                    'label' => 'Current expenses transport :',
                    'required' => true,
                
            ))
            ->add('currentExpensesFood' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'disabled' => 'disabled',),
                    'label' => 'Current expenses food :',
                    'required' => true,
                
            ))
            ->add('currentExpensesHome' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'disabled' => 'disabled',),
                    'label' => 'Current expenses home :',
                    'required' => true,
                
            ))
            ->add('longTermForFutureExpenses' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'disabled' => 'disabled',),
                    'label' => 'Long term future expenses :',
                    'required' => true,
                
            ))
            ->add('pleasureAccount' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'disabled' => 'disabled',),
                    'label' => 'Pleasure account :',
                    'required' => true,
                
            ))
            ->add('educationAccount' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'disabled' => 'disabled',),
                    'label' => 'Cost name :',
                    'required' => true,
                
            ))
            ->add('helpOthersAccount' , IntegerType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px',
						'disabled' => 'disabled',),
                    'label' => 'Education account :',
                    'required' => true,
                
            ))
            ->add('month' , ChoiceType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
                        'style' => 'color:black; font-size:14px; margin-bottom:10px; text-transform: uppercase; border: 1px solid gold; width:250px; height:40px'),
                    'label' => 'Month :',
                    'choices' => array(
                        $months,),
                    'required' => true,                 
            ))
            ->add('year' , TextType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
						'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:250px; height:40px'),
                    'label' => 'Year :',
                    'required' => true,
            ));
    }
}