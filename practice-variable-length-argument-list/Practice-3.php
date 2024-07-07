<?php 

function average(...$values)
{
  $total = 0;
  $avg = 0;
  foreach($values as $value) {
    $total += $value;
    $avg = $total / count($values);
  }

  echo "Numbers " . implode(", ", $values) . " = $avg" . PHP_EOL;
}

average(10, 20, 30, 40, 50);