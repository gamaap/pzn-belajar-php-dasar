<?php 

$array = [1, 2, 3, 4, 2, 2, 5, 2];

$count = 0;
$valueToCount = 2;
foreach($array as $arr) {
  if($arr === $valueToCount) {
    $count++;
  }
}

echo "Occurence of $valueToCount is $count" . PHP_EOL;
