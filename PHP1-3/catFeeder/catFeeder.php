<?php
require_once "catFeederValidator.php";

function handleRemainder($remainder)
{

}

function dispenceFood($initialAmount, $portionSize)
{

    $is_valid = validateInitialAmount($initialAmount) &&
    validatePortionSize($portionSize, $initialAmount);

    if (!$is_valid) {
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

function addFood($initialAmount, $amountToAdd)
{
    return $initialAmount + $amountToAdd;
}

function emptyFeeder($initialAmount, $portionSize)
{
    echo "Received $initialAmount oz of food <br />";
    echo "Need to empty it using $portionSize oz Portion Size.<br />";

    while ($initialAmount > 0) {

        if ($initialAmount >= $portionSize) {
            dispenceFood($initialAmount, $portionSize);
            $initialAmount -= $portionSize;
        } elseif ($initialAmount > 0) {
            dispenceFood($initialAmount, $initialAmount);
            $initialAmount = 0;
        }

        echo "Dispenced $portionSize oz,
        have $initialAmount oz remaining. <br />";
    }

    echo "All Done!";
}
