<?php
    define("MAX_AGE", 120);
    define("NAME", "Cooper");

    echo MAX_AGE . "<br />";

    $age = MAX_AGE;

    echo $age . "<br />";

    $age += 300;
    
    echo $age . "<br />";
    echo NAME. " is " . MAX_AGE . " years old<br />";

    function countCalls()
    {
        static $call_counter = 0;
        echo "Called " . ++$call_counter . " times!<br />";
    }

    countCalls();
    countCalls();
    countCalls();


?>