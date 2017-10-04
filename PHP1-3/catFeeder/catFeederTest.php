<?php
require_once 'catFeeder.php';
require_once "catFeederValidator.php";

class catFeederTest
{
    private $catFeeder;
    private $catFeederValidator;

    public function __construct($initialAmount)
    {
        $this->catFeeder = new CatFeeder($initialAmount);
        $this->catFeederValidator = new CatFeederValidator();
    }

    public function testDispenceFood()
    {
        $portionSize = 5;

        $result =
        $this->catFeeder->dispenceFood($portionSize);

        if ($result == 5) {
            echo "testDispenceFood: Test Passed!";
        } else {
            echo "testDispenceFood: Test Failed! Expected 5 but received $result";
        }
    }

    public function testAddFood()
    {
        $amountToAdd = 10;

        $result = $this->catFeeder->addFood($amountToAdd);

        if ($result == 110) {
            echo "testAddFood: Test Passed!";
        } else {
            echo "testAddFood: Test Failed! Expected 110 but received $result";
        }

    }

    public function testValidateInitialAmount($initialAmount)
    {
        foreach ($initialAmount as $key => $value) {
            $result =
            $this->catFeederValidator->validateInitialAmount($key);

            if ($result != $value) {
                echo "<br />testValidateInitialAmount $key: Test Failed!
        Expected $value but received $result<br />";
            } else {
                echo "<br />testValidateInitialAmount: Test Passed!<br />";
            }
        }
    }

    public function testValidatePortionSize($testKeyValuePairs, $initialSize)
    {
        foreach ($testKeyValuePairs as $key => $value) {
            $result =
            $this->catFeederValidator->validatePortionSize($key, $initialSize);
            //echo "$key : $value : $intialSize : $result";

            if ($result != $value) {
                echo "<br />testValidatePortionSize $key: Test Failed!
        Expected $value but received $result<br />";
            } else {
                echo "<br />testValidatePortionSize: Test Passed!<br />";
            }
        }
    }
}

$a = array();

$keyValuePairs = array(
    $a => false,
    "foo" => false,
    0 => false,
    -1 => false,
    20 => true,
);

$keyValuePairsForPortionSize = array(
    $a => false,
    "foo" => false,
    0 => false,
    -1 => false,
    20 => false,
    1 => true,
    2 => true,
    3 => true,
);

$keyValuePairs2 = array(
    100 => false,
);

$tester = new CatFeederTest(600);

$tester->testValidateInitialAmount($keyValuePairs);

$tester->testValidatePortionSize($keyValuePairsForPortionSize, 250);

$tester->testValidatePortionSize($keyValuePairs2, 50);
