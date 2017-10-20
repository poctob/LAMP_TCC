<?php

class Person
{

    private $first_name;
    private $last_name;

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function prettyPrint()
    {
        return "$this->first_name $this->last_name";
    }
}
