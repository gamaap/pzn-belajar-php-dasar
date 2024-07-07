<?php 

$prices = [10.50, 23.99, 5.75, 8.30];

$total = 0;
foreach($prices as $price) {
  $total += $price; 
}

echo "Total Price: $total" . PHP_EOL;