<?php 

$total = 0;
do {
  $input = (int) readline("Enter Positive Number (negative to stop): ");
  if($input >= 0) {
    $total += $input;
  }
} while($input >= 0);

echo "Your total is $total" . PHP_EOL;