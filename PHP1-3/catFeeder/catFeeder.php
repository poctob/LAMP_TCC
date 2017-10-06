<?php
require_once "Feeder.php";

class CatFeeder extends Feeder
{
    public function __construct()
    {
        parent::__construct(50, array(1,2,3));
    } //constructor end
} //class end

$feeder = new CatFeeder();
$feeder->emptyFeeder(6);
