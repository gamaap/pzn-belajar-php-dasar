<?php 

// increment loop
for($counter = 1; $counter <= 10; $counter++) {
  echo "This is for loop number-$counter" . PHP_EOL;
}

// decrement loop
for($counter = 10; $counter >= 1; $counter--) {
  echo "This is for loop number-$counter" . PHP_EOL;
}

// alternative syntax
for($counter = 1; $counter <= 10; $counter++) :
  echo "This is for loop number-$counter" . PHP_EOL;
endfor;

for($counter = 10; $counter >= 1; $counter--) :
  echo "This is for loop number-$counter" . PHP_EOL;
endfor;