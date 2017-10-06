<?php

$numericArray = array(1, 3, 55, 38, 999, 322, 443, 33, 73, 33);
print_r($numericArray);

$result = is_array($numericArray);
echo "<br /> $result <br />";

$result = count($numericArray);
echo "<br /> $result <br />";

for ($i = 0; $i < count($numericArray); $i++) {
    echo "$numericArray[$i] ";
}
echo "<br />";
sort($numericArray);
print_r($numericArray);

echo "<br />";
rsort($numericArray);
print_r($numericArray);

echo "<br />";
sort($numericArray, SORT_STRING);
print_r($numericArray);

echo "<br />";
shuffle($numericArray);
print_r($numericArray);


$stringArray = explode(' ', "This is a long sentence, or not?");
echo "<br />";
print_r($stringArray);

$stringArray = explode(',', "This is a long sentence, or not?");
echo "<br />";
print_r($stringArray);

$keyValuePairs = array("key1" => "value1", "key2" => "bacon");

extract($keyValuePairs, EXTR_PREFIX_ALL, 'dog');

echo "<br /> $dog_key1 : $dog_key2 <br />";

$firstName = "Bob";
$lastName = "Doe";
$age = "44";

$person = compact('firstName', 'lastName', 'age');
echo "<br />";
print_r($person);

$array1[] = 1;
$array1[] = 300;
$array1[] = 32;

echo "<br />";
print_r($array1);


$array2[0] = 1;
$array2[3] = 300;
$array2[5433] = 32;

echo "<br />";
print_r($array2);
