<?php 

do {
  $number = (int)readline("Enter a positive number to calculate its factorial (non-positive to stop): ");
  if ($number > 0) {
    $factorial = 1;
    for ($i = $number; $i > 1; $i--) {
      $factorial *= $i;
    }
    echo "Factorial of $number is $factorial" . PHP_EOL;
  }
} while ($number > 0);
