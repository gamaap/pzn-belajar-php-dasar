<?php 

$counter = 1;

while (true) {
  echo "This is while loop with break number-$counter" . PHP_EOL;
  $counter++;

  if($counter > 10) {
    break; // stop the loop
  }
}