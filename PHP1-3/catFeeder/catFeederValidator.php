<?php

    function validateInitialAmount($initialAmount) {
        $is_valid = is_numeric($initialAmount);
        
        if(!$is_valid) {
            echo "Initial amount is not numeric";
            return false;
        }

        $is_valid = $initialAmount > 0;
        
        if(!$is_valid) {
            echo "Initial amount should be greater than zero";
            return false;
        }

        return true;
    }

    function validatePortionSize($portionSize, $initialAmount) {
        $is_valid = is_numeric($portionSize);
        
        if(!$is_valid) {
            echo "Portion size is not numeric";
            return false;
        }
    
        $is_valid = $portionSize > 0;
        
        if(!$is_valid) {
            echo "Portion size should be greater than zero";
            return false;
        }
    
        $is_valid = $portionSize <= $initialAmount;
        
        if(!$is_valid) {
            echo "Portion size should be less than initial amount";
            return false;
        }

        switch($portionSize) {
            case 3:
                $is_valid = true;
                break;
            case 2:
                $is_valid = true;
                break;
            case 1:
                $is_valid = true;
                break;
            default:
                $is_valid = false;
                echo "Invalid portion size!";
                break;
        }

        return $is_valid;
    }

?>