<?php 

$number = 12345;
$sum = 0;

while ($number > 0) {
  $digit = $number % 10; // gives last digit of the number
  $sum += $digit;
  $number = (int) ($number / 10); // remove the last digit of the number
}

echo $sum . PHP_EOL;