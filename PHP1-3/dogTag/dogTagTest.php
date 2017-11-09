<?php

require_once 'serviceDog.php';
require_once 'houndDog.php';
require_once 'cat.php';

$pet = new Pet();
$pet->setName('Fido');
echo $pet->getName() . "<br />";

$pet = new Dog();
$pet->setName('Fido');
echo $pet->getName() . "<br />";

$pet = new Cat();
$pet->setName('Fido');
echo $pet->getName() . "<br />";

$pet = new ServiceDog();
$pet->setName('Fido');
echo $pet->getName() . "<br />";

$pet = new HoundDog();
$pet->setName('Fido');
echo $pet->getName() . "<br />";

$pet->fetchDuck();

echo "<br />";

Dog::getType();

echo "<br />";

MammalType::getType();
