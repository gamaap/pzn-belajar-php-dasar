<?php 

$isMember = true;
$hasCoupont = true;
$purchaseAmount = 150;

if($isMember && $hasCoupont && $purchaseAmount >= 100) {
  echo "Eligible for discount." . PHP_EOL;
} else {
  echo "Not eligible for discount." . PHP_EOL;
}