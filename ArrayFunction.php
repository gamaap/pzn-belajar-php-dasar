<?php 

/**
 * https://www.php.net/manual/en/ref.array.php
 */

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

var_dump(array_map(fn(int $value) => $value * 2, $array)); // applies callback of the given array

rsort($array); // sort array in descending order
var_dump($array);

var_dump(array_keys($array)); // get array keys / indexes
var_dump(array_values($array)); // get array values

$person = [
  "first_name" => "Gama",
  "middle_name" => "Anggadipa",
  "last_name" => "Pratama"
];

var_dump(array_keys($person)); // get array keys / indexes
var_dump(array_values($person)); // get array values