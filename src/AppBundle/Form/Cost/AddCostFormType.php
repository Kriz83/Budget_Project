<?php

namespace AppBundle\Form\Cost;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AddCostFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		
		$costTypesArray = $options['data']['costTypesArray'];
		
        $currentDate    = new \DateTime();
        $currentYear    = $currentDate->format('Y');
        $currentMonth   = $currentDate->format('m');
        $months = [];
        $i = 1;
        $monthName = '';
        
    //create array of months
        for ($i; $i <= 12; $i++) {
            
            $monthName = \DateTime::createFromFormat('!m', $i)->format('F');
            $months[$monthName] = $i;
            
        }
		
		$costTypes = 
        
        $builder
            ->add('name' , TextType::class, array(
                    'attr' => array(
                        'class' => 'form-control' , 'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:300px; height:40px'),
                    'label' => 'Cost name :',
                    'required' => true,
                
            ))
            ->add('costValue' , TextType::class, array(
                    'attr' => array(
                        'class' => 'form-control' , 'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:300px; height:40px'),
                    'label' => 'Cost :',
                    'required' => true,
                
            ))
            ->add('costType' , ChoiceType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
                        'style' => 'color:black; font-size:14px; margin-bottom:10px; text-transform: uppercase; border: 1px solid gold; width:300px; height:40px'),
                    'label' => 'Cost type :',
                    'choices' => array(
                        $costTypesArray,),
                    'required' => true,                  
            ))
            ->add('month' , ChoiceType::class, array(
                    'attr' => array(
                        'class' => 'form-control' ,
                        'style' => 'color:black; font-size:14px; margin-bottom:10px; text-transform: uppercase; border: 1px solid gold; width:300px; height:40px'),
                    'label' => 'Month :',
                    'choices' => array(
                        $months,),
                    'required' => true,  
                    'data' => $currentMonth,                  
            ))
            ->add('year' , TextType::class, array(
                    'attr' => array(
                        'class' => 'form-control' , 'style' => 'color:black; font-size:12px; text-transform: uppercase; margin-bottom:10px; border: 1px solid gold; width:300px; height:40px'),
                    'label' => 'Year :',
                    'required' => true,
                    'data' => $currentYear,
            ));
    }
}