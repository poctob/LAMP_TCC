<?php

class CatFeederValidator
{
    public function validateAddFood($amountToAdd, $currentAmount, $capacity)
    {
        $is_valid = is_numeric($amountToAdd);
        
        if (!$is_valid) {
            echo "Amount to add is not numeric";
            return false;
        }

        $is_valid = is_numeric($currentAmount);
        
        if (!$is_valid) {
            echo "Current amount is not numeric";
            return false;
        }

        $is_valid = is_numeric($capacity);
        
        if (!$is_valid) {
            echo "Capacity is not numeric";
            return false;
        }

        $is_valid = $amountToAdd > 0;
        
        if (!$is_valid) {
            echo "Amount to add should be greated than zero.";
            return false;
        }

        $is_valid = $currentAmount >= 0;
        
        if (!$is_valid) {
            echo "Current amount should be greater of equal to zero.";
            return false;
        }

        $is_valid = $capacity > 0;
        
        if (!$is_valid) {
            echo "Capacity should be greater than zero.";
            return false;
        }

        $is_valid = $amountToAdd + $currentAmount <= $capacity;

        if (!$is_valid) {
            echo "Capacity exceeded!";
            return false;
        }

        return $is_valid;
    }

    public function validateInitialAmount($initialAmount)
    {
        $is_valid = is_numeric($initialAmount);

        if (!$is_valid) {
            echo "Initial amount is not numeric";
            return false;
        }

        $is_valid = $initialAmount > 0;

        if (!$is_valid) {
            echo "Initial amount should be greater than zero";
            return false;
        }

        return true;
    }

    public function validatePortionSize($portionSize, $initialAmount, $acceptablePortionSizes)
    {
        $is_valid = is_numeric($portionSize);

        if (!$is_valid) {
            echo "Portion size is not numeric";
            return false;
        }

        $is_valid = $portionSize > 0;

        if (!$is_valid) {
            echo "Portion size should be greater than zero";
            return false;
        }

        $is_valid = $portionSize <= $initialAmount;
        //echo "$portionSize : $initialAmount : $is_valid";//

        if (!$is_valid) {
            echo "Portion size should be less than initial amount";
            return false;
        }

        $is_valid = in_array($portionSize, $acceptablePortionSizes);

        if (!$is_valid) {
            echo "Invalid portion size!";
        }

        return $is_valid;
    }
}
