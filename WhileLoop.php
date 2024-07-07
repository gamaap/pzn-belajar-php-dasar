<?php 

$counter = 1;
while($counter <= 10) {
  echo "This is While Loop Number-$counter" . PHP_EOL;
  $counter++;
}

// alternative syntax
$counter = 1;
while($counter <= 10) :
  echo "This is While Loop Number-$counter" . PHP_EOL;
  $counter++;
endwhile;