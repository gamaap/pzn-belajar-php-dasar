<?php 

// without recursive function
function factorialLoop(int $value): int
{
  $total = 1;
  for($i = 1; $i <= $value; $i++) {
    $total *= $i;
  }
  return $total;
}

echo factorialLoop(5) . PHP_EOL;

// with recursive function
function factorialRecursive(int $value): int
{
  if($value == 1) {
    return 1;
  } else {
    return $value * factorialRecursive($value - 1);
  }
}

echo factorialRecursive(5) . PHP_EOL;

// recursive function will cause memory overflow if it used too deep
function loop(int $value)
{
  if($value == 0) {
    echo "End Loop" . PHP_EOL;
  } else {
    echo "Loop-$value" . PHP_EOL;
    loop($value - 1);
  }
}

loop(10); // safe
// loop(3000000) // it may cause memory overflow, run at your own risk