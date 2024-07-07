<?php 

function multiplyAll(...$values)
{
  $total = 1;
  foreach($values as $value) {
    $total *= $value;
  }

  echo "Product: " . implode(", ", $values) . " = $total" . PHP_EOL;
}

multiplyAll(1, 2, 3, 4, 5);