<?php

class Dog
{
    private $name;
    private $isSittingDown;

    public function __construct($name)
    {
        $this->name = $name;
        $this->isSittingDown = false;
    }

    public function __destruct()
    {
        //echo "<br />Bye bye, $this->name is going away";
    }

    public function bark()
    {
        echo "Woof Woof, my name is $this->name <br />";
    }

    public function sit($treat)
    {
        if ($treat == null) {
            echo "You better give me a treat first!<br />";
            $this->isSittingDown = false;
        } else {
            echo "Woof, you are my favorite human!<br />";
            $this->isSittingDown = true;
        }
    }

    public function isSittingDown()
    {
        if ($this->isSittingDown) {
            echo "$this->name is sitting down<br />";
        } else {
            echo "$this->name is chasing his tail<br />";
        }
    }
}

$dog = new Dog("Fido");
$dog->bark();

$puppy = new Dog("Rover");
$puppy->bark();

$puppy->sit();
$dog->sit("Milk bone");

$puppy->isSittingDown();
$dog->isSittingDown();
