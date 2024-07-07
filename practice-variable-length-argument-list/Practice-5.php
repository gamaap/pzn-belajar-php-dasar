<?php 

function sumEvenNumbers(...$values)
{
  $total = 0;
  foreach($values as $value) {
    if($value % 2 == 0) {
      $total += $value;
    }
  }

  echo "Even Numbers: " . implode(", ", $values) . " = $total" . PHP_EOL;
}

sumEvenNumbers(1, 2, 3, 4, 5, 6);