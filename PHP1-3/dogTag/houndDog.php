<?php

require_once "dog.php";
require_once "waterRetriever.php";

class HoundDog extends Dog
{
    // use Tracker, Retriever {
    //     Tracker::sayHello insteadof Retriever;
    //     Retriever::sayHello as retrieverSayHello;
    //     Retriever::protectedWoof as public;
    // }

    use WaterRetriever;
    
    public function __construct()
    {
        $this->setBreed("Bassett");
    }

    // public function sayHello()
    // {
    //     echo "Hello from HoundDog!";
    // }

}
