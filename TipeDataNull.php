<?php 

$name = "John Doe";
$name = null;

$age = null;

echo "Name: ";
echo $name;
echo "\n";
echo "Age: ";
echo $age;
echo "\n";

echo "Is name null? ";
var_dump(is_null($name)); // or you can use echo is_null($name), 1 if true or null is false
// is_null = check if variable is null or not

$example = "John";
unset($example); // unset or delete variable

// echo $example; // error, because $example is not defined
$example = "Another John";

var_dump(isset($example)); // check if variable is set and its value is not null