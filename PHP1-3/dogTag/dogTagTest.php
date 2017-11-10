<?php

require_once 'serviceDog.php';
require_once 'houndDog.php';
require_once 'cat.php';
require_once 'trainableDog.php';
require_once 'husky.php';
require_once 'stBernard.php';

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

$trainableDog = new TrainableDog();
$trainableDog->learnTrick('sit');
$trainableDog->doTrick('sit');
$trainableDog->getReward('biscuit');

$trainableDog->learnTrick('sit');
$trainableDog->doTrick('shake');

echo "<br />";
$husky = new Husky();
$husky->eat(4);

echo "<br />";
$stBernard = new StBernard();
$stBernard->eat(4);