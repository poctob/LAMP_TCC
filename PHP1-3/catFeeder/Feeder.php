<?php
require_once "catFeederValidator.php";

class Feeder
{
    private $foodBinCapacity;
    private $portionSizes;
    private $catFeederValidator;
    private $currentFoodAmount;

    public function __construct($foodBinCapacity, $portionSizes)
    {
        $this->foodBinCapacity = $foodBinCapacity;
        $this->portionSizes = $portionSizes;
        $this->catFeederValidator = new CatFeederValidator();
        $this->currentFoodAmount = 0;
    } //constructor end

    public function foodBinCapacity()
    {
        return $this->foodBinCapacity;
    }

    public function portionSizes()
    {
        return $this->portionSizes;
    }

    public function dispenceFood($portionSize)
    {
        $is_valid =
        $this->catFeederValidator->validateInitialAmount($this->currentFoodAmount) &&
        $this->catFeederValidator->validatePortionSize(
            $portionSize,
            $this->currentFoodAmount,
            $this->portionSizes);

        if (!$is_valid) {
            die ("Validation failed!");
        }

        $this->currentFoodAmount -= $portionSize;
    } //dispenceFood end

    public function addFood($amountToAdd)
    {
        $is_valid = $this->catFeederValidator->validateAddFood(
            $amountToAdd,
            $this->currentFoodAmount,
            $this->foodBinCapacity
        );

        if (!$is_valid) {
            die ("Validation failed!");
        }

        $this->currentFoodAmount += $amountToAdd;
    } //addFood end

    public function emptyFeeder($portionSize)
    {
        echo "Starting with $this->currentFoodAmount oz of food <br />";
        echo "Need to empty it using $portionSize oz Portion Size.<br />";

        while ($this->currentFoodAmount > 0) {
            if ($this->currentFoodAmount >= $portionSize) {
                $this->dispenceFood($portionSize);
            } elseif ($this->currentFoodAmount > 0) {
                $this->dispenceFood($this->currentFoodAmount);
                $this->currentFoodAmount = 0;
            }

            echo "Dispenced $portionSize oz,
            have $this->currentFoodAmount oz remaining. <br />";
        }

        echo "All Done!";
    } //emptyFeeder end
} //class end
