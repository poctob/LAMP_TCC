<?php
require_once 'catFeeder.php';
require_once "catFeederValidator.php";

function testDispenceFood()
{

    $initalAmount = 100;
    $portionSize = 5;

    $result = dispenceFood($initialAmount, $portionSize);

    if ($result == 5) {
        echo "testDispenceFood: Test Passed!";
    } else {
        echo "testDispenceFood: Test Failed! Expected 5 but received $result";
    }
}

function testAddFood()
{
    $initialAmount = 100;
    $amountToAdd = 10;

    $result = addFood($initialAmount, $amountToAdd);

    if ($result == 110) {
        echo "testAddFood: Test Passed!";
    } else {
        echo "testAddFood: Test Failed! Expected 110 but received $result";
    }

}

function testValidateInitialAmount($initialAmount)
{
    foreach ($initialAmount as $key => $value) {
        $result = validateInitialAmount($key);

        if ($result != $value) {
            echo "<br />testValidateInitialAmount $key: Test Failed!
        Expected $value but received $result<br />";
        } else {
            echo "<br />testValidateInitialAmount: Test Passed!<br />";
        }
    }
}

function testValidatePortionSize($testKeyValuePairs, $intialSize) {
    foreach ($testKeyValuePairs as $key => $value) {
        $result = validatePortionSize($key, $initialSize);
        //echo "$key : $value : $intialSize : $result";

        if ($result != $value) {
            echo "<br />testValidatePortionSize $key: Test Failed!
        Expected $value but received $result<br />";
        } else {
            echo "<br />testValidatePortionSize: Test Passed!<br />";
        }
    }
}

$a = array();

$keyValuePairs =  array(
    $a => false,
    "foo" => false, 
    0 => false, 
    -1 => false,
    20 => true
);

$keyValuePairs2 =  array(
    100 => false
);

testValidateInitialAmount($keyValuePairs);

testValidatePortionSize($keyValuePairs, 250);
testValidatePortionSize($keyValuePairs2, 50);

?>