<?php 

$array = [2, 3, 4, 5];
$sqrArr = [];

foreach($array as $arr) {
  $sqrArr[] = $arr ** 2;
}

echo implode(", ", $sqrArr) . PHP_EOL;