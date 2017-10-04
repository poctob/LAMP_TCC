<?php
require_once "catFeederValidator.php";

class CatFeeder
{
    private $initialAmount;
    private $catFeederValidator;

    public function __construct($initialAmount)
    {
        $this->initialAmount = $initialAmount;
        $this->catFeederValidator = new CatFeederValidator();
    } //constructor end

    public function initialAmount()
    {
        return $this->initialAmount;
    }

    private function handleRemainder()
    {

    } //handleRemainder end

    public function dispenceFood($portionSize)
    {
        $is_valid =
        $this->catFeederValidator->validateInitialAmount($this->initialAmount) &&
        $this->catFeederValidator->validatePortionSize($portionSize, $this->initialAmount);

        if (!$is_valid) {
            echo "Validation failed!";
            return;
        }

        $this->initialAmount -= $portionSize;

        $this->handleRemainder();
    } //dispenceFood end

    public function addFood($amountToAdd)
    {
        $this->initialAmount += $amountToAdd;
    } //addFood end

    public function emptyFeeder($portionSize)
    {
        echo "Starting with $this->initialAmount oz of food <br />";
        echo "Need to empty it using $portionSize oz Portion Size.<br />";

        while ($this->initialAmount > 0) {

            if ($this->initialAmount >= $portionSize) {
                $this->dispenceFood($portionSize);

            } elseif ($this->initialAmount > 0) {
                $this->dispenceFood($initialAmount);
                $this->initialAmount = 0;
            }

            echo "Dispenced $portionSize oz,
            have $this->initialAmount oz remaining. <br />";
        }

        echo "All Done!";
    } //emptyFeeder end

} //class end

//$feeder = new CatFeeder(600);
//$feeder->emptyFeeder(3);
