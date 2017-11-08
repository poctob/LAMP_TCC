<?php

require_once "pet.php";

class Cat extends Pet
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

    public function purr()
    {
        return "Prrrrr";
    }
}
