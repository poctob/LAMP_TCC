<?php

trait MammalType
{
    static function getType() {
        echo __TRAIT__ ." : Mammal";
        echo "<br /> Called from : " . __CLASS__;
    }
}