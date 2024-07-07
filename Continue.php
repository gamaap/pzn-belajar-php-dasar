<?php 

for($counter = 1; $counter <= 100; $counter++) {
  if($counter % 2 == 0) {
    continue;
  }

  echo "This only print odd number-$counter" . PHP_EOL;
}

$counter = 1;
while($counter <= 100) {
  if($counter % 2 == 1) {
    $counter++;
    continue;
  }
  echo "This will print even number-$counter" . PHP_EOL;
  $counter++;
}