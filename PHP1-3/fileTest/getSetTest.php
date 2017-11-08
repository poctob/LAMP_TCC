<?php

class GetSetTest
{
    private $name;

    public function __get($var)
    {
        return $this->$var;
    }

    public function __set($var, $val)
    {
        $this->$var = $val;
    }
}

$getsettest = new GetSetTest();
$getsettest->name = 'Hello';
echo $getsettest->name;
