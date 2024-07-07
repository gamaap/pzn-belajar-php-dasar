<?php 

do {
  echo "1. Generate Multiplication Table" . PHP_EOL;
  echo "2. Quit App" . PHP_EOL;
  $input = (int) readline("Choose: ");
  if($input == 1) {
    $number = (int) readline("Enter number: ");
    for($i = 1; $i <= $number; $i++) {
      for($j = 1; $j <= $number; $j++) {
        echo $i * $j . "\t";
      }
      echo PHP_EOL;
    }
  } else if($input > 2) {
    echo "Invalid Input." . PHP_EOL;
  }
} while($input != 2);

echo "Exiting..." . PHP_EOL;