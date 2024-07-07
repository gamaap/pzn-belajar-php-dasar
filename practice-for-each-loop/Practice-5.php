<?php 

$array = [1, 2, 3, 4, 5, 6, 7, 8];
$even = [];

foreach($array as $arr) {
  if($arr % 2 == 0) {
    $even[] = $arr;
  }
}

echo implode(", ", $even) . PHP_EOL;