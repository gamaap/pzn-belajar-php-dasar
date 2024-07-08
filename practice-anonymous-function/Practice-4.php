<?php 

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

$isPrime = function(int $n) {
  for($i = 2; $i <= sqrt($n); $i++) {
    if($n % $i == 0) {
      return false;
    }
  }
  return true;
};

$primes = array_filter($array, $isPrime);

var_dump($primes);