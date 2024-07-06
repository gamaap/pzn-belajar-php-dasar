<?php 

$score = 70;

switch($score) {
  case ($score > 90):
    echo "A" . PHP_EOL;
    break;
  case ($score >= 80):
    echo "B" . PHP_EOL;
    break;
  case ($score >= 70):
    echo "C" . PHP_EOL;
    break;
  case ($score >= 60):
    echo "D" . PHP_EOL;
    break;
  default:
    echo "F" . PHP_EOL;
}