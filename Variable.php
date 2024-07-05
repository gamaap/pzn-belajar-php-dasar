<?php 

$name = "John Doe";
$age = 20;

echo "Name: ";
echo $name;
echo "\n";
echo "Age: ";
echo $age;
echo "\n";

// variable variables
$person = "john";
$$person = "I am cool"; // $john = "I am cool"
echo $john;
echo "\n";