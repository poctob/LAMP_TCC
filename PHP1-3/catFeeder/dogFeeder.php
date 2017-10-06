<?php
require_once "Feeder.php";

class DogFeeder extends Feeder
{
    public function __construct()
    {
        parent::__construct(100, array(2,4,8,10));
    } //constructor end
} //class end

$feeder = new DogFeeder();
$feeder->addFood(100);
$feeder->emptyFeeder(8);
