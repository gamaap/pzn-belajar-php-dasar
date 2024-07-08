<?php 

function add(int $a, int $b): int
{
  return $a + $b;
}

function subtract(int $a, int $b): int
{
  return $a - $b;
}

function multiply(int $a, int $b): int
{
  return $a * $b;
}

function divide(int $a, int $b): mixed
{
  return $b != 0 ? $a / $b : "Division by zero error";
}

$operation = "add";
echo $operation(5, 2) . PHP_EOL;

$operation = "subtract";
echo $operation(5, 2) . PHP_EOL;

$operation = "multiply";
echo $operation(5, 2) . PHP_EOL;

$operation = "divide";
echo $operation(5, 0) . PHP_EOL;