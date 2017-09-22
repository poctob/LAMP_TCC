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

    $number_array = Array(1, 3, 88, 1000034); //array of numbers

    foreach($number_array as $number)
    {
        echo $number . ' ';
    }

    $mixed_array = Array("test_string", 34, 55.32); //mixed array

    echo '<br />';

    foreach($mixed_array as $item)
    {
        echo $item . ' ';
    }

    $multi_array = Array(
        Array(1, 2, 3, 4),
        Array("string1", "String2"),
        Array(12.3, 33, "Another String")
    );

    echo '<br />';

    print_r($multi_array);

?>