<?php

abstract class Animal{
    public $name;
    public $age;

    abstract public function getType();

    public function printInformation()
    {
        echo "Hi my name is $this->name "; 
        echo "and I am $this->age years old.<br/>";
        echo "I am a " . $this->getType() . ".<br />";
    }
}