<?php 

function filterPositiveNumbers(...$numbers)
{
  $positive = [];
  foreach($numbers as $number) {
    if($number > 0) {
      $positive[] = $number;
    }
  }
  echo "Filtered Numbers: " . implode(", ", $numbers) . " = " . implode(", ", $positive) . PHP_EOL;
}

filterPositiveNumbers(-10, 20, -30, 40, 50);