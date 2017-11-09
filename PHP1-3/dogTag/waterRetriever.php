<?php

require_once "swimmer.php";
require_once "retriever.php";
trait WaterRetriever
{
    use Retriever, Swimmer;

    public function fetchDuck() {
        $this->swim();
        $this->fetch();
        $this->swim();
        echo "Got a duck!";
    }

}