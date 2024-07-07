<?php 

// Assign by Reference
$name = "Gama";

$otherName = &$name;
$otherName = "Anggadipa";

echo $name . PHP_EOL;

// Pass by Reference
function increment(int &$value)
{
  $value++;
}

$counter = 1;
increment($counter);
increment($counter);
echo $counter . PHP_EOL;

// Returning by Reference
function &getCounter()
{
  static $counter = 1;
  return $counter;
}

$counter = &getCounter();
$counter = 100;

$temp = &getCounter();
echo $temp . PHP_EOL;