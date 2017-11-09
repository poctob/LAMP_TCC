<?php

require_once "pet.php";
require_once "retriever.php";
require_once "mammalType.php";

class Dog extends Pet
{
    use MammalType;
    
    private $breed;

    public function setBreed($breed)
    {
        $this->breed = $breed;
    }

    public function getBreed()
    {
        return $this->breed;
    }
}
