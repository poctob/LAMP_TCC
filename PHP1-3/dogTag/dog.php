<?php

require_once "pet.php";

class Dog extends Pet
{
    private $breed;

    public function setBreed($breed)
    {
        $this->breed = $breed;
    }

    public function getBreed()
    {
        return $this->breed;
    }

    public function fetch()
    {
        return "Woof";
    }
}
