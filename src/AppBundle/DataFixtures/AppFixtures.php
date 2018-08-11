<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\CostType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {		
		
		/*
		*
		* use 
		* php composer.phar require --dev doctrine/doctrine-fixtures-bundle
		* to install fixtures bundle
		* in AppKernel:
		* new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
		* and
		* php bin/console doctrine:fixtures:load
		* in command line to auto fill cost type table
		*
		*/
        
		$costTypes = [
			'Finance freedom account' => 2,
			'Money box account' => 1,
			'Long term costs' => 1,
			'Pleasure account' => 1,
			'Education account' => 1,
			'Help others account' => 1,
			'Life current - food' => 0,
			'Life current - others' => 0,
			'Life current - pleasure' => 0,
			'Life current - transport' => 0
		];
		
        foreach ($costTypes as $costType => $typeOfCost) {
            $costTypeDB = new CostType();
            $costTypeDB->setName($costType);
            $costTypeDB->setTypeOfCost($typeOfCost);
            $manager->persist($costTypeDB);
        }

        $manager->flush();
    }
}