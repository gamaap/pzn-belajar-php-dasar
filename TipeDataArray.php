<?php 

// Array Numeric
// array keyword
$values = array(1, 2, 3, 4, 5);
var_dump($values);

// angle brackets
$names = ["John", "Jane", "Joe"];
var_dump($names);

// array operation
var_dump($names[0]); // access element in array by index

$names[0] = "Steve"; // change element in array by index
var_dump($names);

unset($names[1]); // delete element in array by index
var_dump($names);

$names[] = "Mary"; // add element in the end of the array
var_dump($names);

var_dump(count($names)); // count element in array

// Array Associative
// array keyword
$values = array(
  "name" => "John",
  "age" => 30
);

// angle brackets
$person = [
  "name" => "John",
  "age" => 30
];
var_dump($person);

var_dump($person["name"]); // access element in array by key

// Nested Array
$person = [
  "name" => "John",
  "age" => 30,
  "address" => [
    "street" => "Main St",
    "city" => "Anytown"
  ]
];
var_dump($person["address"]["city"]); // access element in nested array by key