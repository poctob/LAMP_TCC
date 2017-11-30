<?php
require_once("Dog.php");

class Husky extends Dog
{
    public function getType(){
        return "Husky";
    }
}