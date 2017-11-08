<?php

require_once "dog.php";

class ServiceDog extends Dog
{
    public function __construct()
    {
        $this->setBreed("Doberman");
    }

    public function guard()
    {

    }
}
