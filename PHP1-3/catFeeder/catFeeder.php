<?php

function handleRemainder($remainder) {

}

function dispenceFood($initialAmount, $portionSize) {
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