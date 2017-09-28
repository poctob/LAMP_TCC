<?php
require_once("catFeederValidator.php");

function handleRemainder($remainder) {

}

function dispenceFood($initialAmount, $portionSize) {

    $is_valid = validateInitialAmount($initialAmount) &&
                validatePortionSize($portionSize, $initialAmount);

    if(!$is_valid) {
        echo "Validation failed!";
        return;
    }

    $portion = 0;
    $remainder = 0;

    $portion = $portionSize;
    $remainder = $initialAmount - $portion;

    handleRemainder($remainder);

    return $portion;
}

function addFood($initialAmount, $amountToAdd) {
    return $initialAmount + $amountToAdd;
}

?>