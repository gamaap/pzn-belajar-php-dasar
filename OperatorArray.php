<?php 

$first = [
  "first_name" => "John",
];

$last = [
  "last_name" => "Doe",
];

// union array
$full = $first + $last;
var_dump($full);

$a = [
  "first_name" => "John",
  "last_name" => "Doe",
];

$b = [
  "last_name" => "Doe",
  "first_name" => "John",
];

var_dump($a == $b); // true, order of key and value does not matter
var_dump($a === $b); // false, order of key and value does matter