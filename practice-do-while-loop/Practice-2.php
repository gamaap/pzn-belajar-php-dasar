<?php 

do {
  echo "1. Option A" . PHP_EOL;
  echo "2. Option B" . PHP_EOL;
  echo "3. Exit" . PHP_EOL;
  $input = (int) readline("Select Option: ");
  switch($input) {
    case 1:
      echo "You chose Option A." . PHP_EOL;
      break;
    case 2:
      echo "You chose Option B." . PHP_EOL;
      break;
    case 3:
      echo "Exiting..." . PHP_EOL;
      break;
    default:
      echo "Invalid Choice." . PHP_EOL;
  }
} while($input !== 3);