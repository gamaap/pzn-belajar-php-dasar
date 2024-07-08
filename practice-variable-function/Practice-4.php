<?php 

function sumArray(array $numbers): int
{
  return array_sum($numbers);
}

function productArray(array $numbers): int
{
  return array_product($numbers);
}

function findMax(array $numbers): int
{
  return max($numbers);
}

function findMin(array $numbers): int
{
  return min($numbers);
}

$sum = "sumArray";
echo $sum([1, 2, 3, 4, 5]) . PHP_EOL;

$product = "productArray";
echo $product([1, 2, 3, 4, 5]) . PHP_EOL;

$max = "findMax";
echo $max([1, 2, 3, 4, 5]) . PHP_EOL;

$min = "findMin";
echo $min([1, 2, 3, 4, 5]) . PHP_EOL;