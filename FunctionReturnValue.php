<?php 

function sum(int $first, int $second): int
{
  return $first + $second;
}

$total = sum(10, 10); // store return value in variables
echo $total . PHP_EOL;

// when meet return, it will immidiately quit from the function
function getGrades(int $value): string
{
  if($value >= 80) {
    return "A";
  } else if($value >= 70) {
    return "B";
  } else if($value >= 60) {
    return "C";
  } else if($value >= 50) {
    return "D";
  } else {
    return "E";
  }
}

echo getGrades(30) . PHP_EOL;