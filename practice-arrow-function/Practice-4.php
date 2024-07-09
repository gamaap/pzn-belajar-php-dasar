<?php 

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

$filterEven = fn(int $n) => $n % 2 == 0;

$evenNumbers = array_filter($array, $filterEven);

echo implode(", ", $evenNumbers) . PHP_EOL;