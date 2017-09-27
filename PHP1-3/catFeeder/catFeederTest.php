<?php
include_once('catFeeder.php');

function testDispenceFood() {

    $initalAmount = 100;
    $portionSize = 5;

    $result = dispenceFood($initialAmount, $portionSize);

    if($result == 5) {
        echo "testDispenceFood: Test Passed!";
    } else {
        echo "testDispenceFood: Test Failed! Expected 5 but received $result";
    }
}

function testAddFood() {
    $initialAmount = 100;
    $amountToAdd = 10;

    $result = addFood($initialAmount, $amountToAdd);
    
    if($result == 110) {
            echo "testAddFood: Test Passed!";
        } else {
            echo "testAddFood: Test Failed! Expected 110 but received $result";
        }

}

testDispenceFood();
echo "<br />";
testAddFood();

?>