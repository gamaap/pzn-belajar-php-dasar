<?php 

$rand = rand(1, 50);
do {
  $guess = (int) readline("Guess Number (1-50): ");
  if($guess < $rand) {
    echo "Too Low!" . PHP_EOL;
  } else if($guess > $rand) {
    echo "Too High!" . PHP_EOL;
  } else {
    echo "You guessed right. Congratulations!". PHP_EOL;
  }
} while($guess !== $rand);