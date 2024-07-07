<?php 

$target = rand(1, 100);
$guess = 0;

while($guess != $target) {
  $input = (int) readline("Guess The Number (1-100): ");

  if($input < $target) {
    echo "Too Low!" . PHP_EOL;
  } else if($input > $target) {
    echo "Too High!" . PHP_EOL;
  } else {
    echo "Congratulation. You guessed the number." . PHP_EOL;
    break;
  }
}