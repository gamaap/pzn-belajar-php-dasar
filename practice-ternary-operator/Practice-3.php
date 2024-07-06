<?php 

$purchaseAmount = 98;

$discount = $purchaseAmount >= 100 ? "Eligible for discount" : "Not eligible for discount";
echo $discount . PHP_EOL;