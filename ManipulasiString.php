<?php 

$name = "Gama Anggadipa Pratama";

// dot operator
echo "Name: " . $name . PHP_EOL;  // PHP_EOL = end of line (\n)
echo "Value: " . 100 . PHP_EOL;

// data types conversion
$valueString = (string) 100;
var_dump($valueString);

$valueInt = (int) "26";
var_dump($valueInt);

$valueFloat = (float) "100.1";
var_dump($valueFloat);

// access character from string
echo $name[0] . PHP_EOL; // G
echo $name[3] . PHP_EOL; // a
echo $name[17] . PHP_EOL; // a
// echo $name[99] . PHP_EOL; // error, because index is out of range (offset)

// variable parsing (double quotes only)
echo "Name: $name" . PHP_EOL;
echo "Age: $valueInt" . PHP_EOL;

// variable parsing with curly braces
echo "{$name}'s House is at Bandung" . PHP_EOL;
echo "{$valueInt}'s age is under 30" . PHP_EOL;