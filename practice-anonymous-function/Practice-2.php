<?php 

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$squared = array_map(function(int $n) {
  return $n ** 2;
}, $array);

echo "Squared of " . implode(", ", $array) . " is " . implode(", ", $squared) . PHP_EOL;