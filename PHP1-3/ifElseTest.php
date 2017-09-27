<?php
function testNumber($bar) {
    if($bar > 100) {
        echo "100+";
    } elseif ($bar > 50) {
        echo "50+";
    } elseif ($bar > 10) {
        echo "10+";
    } else {
        echo "9 or less";
    }
}

function testSwitch($bar) {
    switch($bar) {
        case $bar>100:
            echo "100+";
            break;

        case $bar>50:
            echo "50+";
            break;

        case $bar>10:
            echo "10+";
            break;

        default:
            echo "9 or less";
            break;
    }
}

testNumber(150);
echo "<br />";
testNumber(60);
echo "<br />";
testNumber(30);
echo "<br />";
testNumber(2);
echo "<br />";

testSwitch(150);
echo "<br />";
testSwitch(60);
echo "<br />";
testSwitch(30);
echo "<br />";
testSwitch(2);
echo "<br />";

for($i = 0; $i <= 50; $i++) {
    
    if($i == 40) {
        continue;
    }

    echo "$i ";

    if($i == 40) {
        break;
    }
}


$foo = true;
$counter = 5;

do
{   
    $counter++;
    echo "bar ";
} while($counter < 5)

?>

