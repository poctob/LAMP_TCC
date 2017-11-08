<?php

require_once "dog.php";

class HoundDog extends Dog
{
    public function __construct()
    {
        $this->setBreed("Bassett");
    }

    public function track()
    {

    }
}
