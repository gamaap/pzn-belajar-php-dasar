<?php 

$total = 1;
$i = 1;
$factorial = 7;

while($i <= $factorial) {
  $total *= $i;
  $i++;
}

echo $total . PHP_EOL;