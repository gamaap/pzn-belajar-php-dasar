<?php 

for($num = 2; $num <= 50; $num++) {
  $isPrime = true; // set default value to true
  for($i = 2; $i <= sqrt($num); $i++) { // no matter how many condition, this loop will run once
    if($num % $i == 0) {
      $isPrime = false;
      break;
    }
  }
  if($isPrime) {
    echo $num . PHP_EOL; // print prime number
  }
}