<?php

namespace AppBundle\Form\Budget;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PanelFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       
       $builder            
            ->add('addIncome', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-budget' ,
                ),
                'label' => 'ADD INCOME',
            ))
            ->add('addCost', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-budget' ,
                ),
                'label' => 'ADD COST',
            ))
            ->add('changeMonthlyPercent', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-budget' ,
                ),
                'label' => 'CHANGE MONTHLY PERCENT',
            ));
       
    }
}