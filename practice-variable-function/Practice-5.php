<?php 

function double(int $n) : int
{
  return $n * 2;
} 

function square(int $n): int
{
  return $n * $n;
}

function cube(int $n): int
{
  return $n * $n * $n;
}

function applyCallback(array $array, callable $callback)
{
  $result = [];
  foreach($array as $value) {
    $result[] = call_user_func($callback, $value);
  }
  return $result;
}

$callback = "double";
$result = applyCallback([1, 2, 3, 4, 5], $callback);
var_dump($result);

$callback = "square";
$result = applyCallback([1, 2, 3, 4, 5], $callback);
var_dump($result);