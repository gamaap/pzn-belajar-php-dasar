<?php 

$array = ["abc", "a", "abcd", "ab"];

$sorted = usort($array, fn($a, $b) => strlen($a) - strlen($b));
echo "Sorted by length: [\"" . implode('", "', $array) . "\"]" . PHP_EOL;

$squared = fn(int $number): int => $number * $number;
echo $squared(4) . PHP_EOL;