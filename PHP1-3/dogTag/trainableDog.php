<?php

require_once "dog.php";
require_once "iTrainable.php";

class TrainableDog extends Dog implements ITrainable
{
    private $tricks = [];

    function learnTrick($trick){
        if(!in_array($trick, $this->tricks)) {
            $this->tricks[] = $trick;
            echo "<br />Added $trick to the bag of tricks!";
        } else {
            echo '<br />I already know this trick!';
        }
    }

    function doTrick($trick){
        if(!in_array($trick, $this->tricks)) {
            $this->tricks[] = $trick;
            echo "<br />I don't know $trick!";
        } else {
            echo "<br />Just did $trick, can I get a treat?";
        }

    }
    
    function getReward($snack){
            echo "Yum!";
     }
}