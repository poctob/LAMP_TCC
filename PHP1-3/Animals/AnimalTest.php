<?php

require_once "Husky.php";

$husky = new Husky();
$husky->name = "Rover";
$husky->age = 5;
$husky->printInformation();

$husky = new Dog();
$husky->name = "Goofy";
$husky->age = 15;
$husky->printInformation();