<?php 

$sum = fn(int $a, int $b): int => $a + $b;

$result = $sum(27, 86);
echo $result . PHP_EOL;