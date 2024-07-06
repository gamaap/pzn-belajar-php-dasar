<?php 

$a = 7;
$b = 1;
$c = 4;

if($a === $b && $a === $c && $b === $c) {
  echo "Equilateral." . PHP_EOL;
} else if($a === $b || $a === $c || $b === $c) {
  echo "Isosceles." . PHP_EOL;
} else {
  echo "Scalene." . PHP_EOL;
}