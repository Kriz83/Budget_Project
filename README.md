Budget Project
========================

How to start
--------------
1.
Create table in db (name like in config).

Load fixtures to proper use of project:

php composer.phar require --dev doctrine/doctrine-fixtures-bundle
to install fixtures bundle
in AppKernel:
new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
and
php bin/console doctrine:fixtures:load
in command line to auto fill cost type table

2.
create user
(register will be added later)

3.
Login and start using project
