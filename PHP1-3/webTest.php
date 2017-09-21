<?php

    //This is a single line comment
    

    /*
        This
        is
        a
        multiline
        comment
    */

    $name = "Luke";  //string
    $age = 25; //int
    $friends = Array("Obi", "Leila", "Darth");


    echo "<strong>Hello " . $name . "</strong><br />";
    echo "You are " . $age . " years old<br />";
    echo $friends[2] . " is your father.<br />";

    $name = 120;
    echo "<strong>Hello " . $name . "</strong><br />";

    $copy_of_friends = $friends; //assigning a varialble to another variable

    foreach($copy_of_friends as $oneFriend) { //iteration over an array
        echo $oneFriend . "<br />";
    }
?>