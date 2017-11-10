<?php

abstract class SnowDog
{
    public function eat($howMuch)
    {
        echo "Num Num";
        $this->playInSnow();
    }

    public abstract function playInSnow();
}