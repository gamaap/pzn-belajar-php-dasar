<?php 

$paymentMethod = "debt";

switch($paymentMethod) {
  case "paypal":
    echo "You're about to pay with $paymentMethod." . PHP_EOL;
    break;
  case "bank transfer":
    echo "You're about to pay with $paymentMethod." . PHP_EOL;
    break;
  case "credit card":
    echo "You're about to pay with $paymentMethod." . PHP_EOL;
    break;
  default:
    echo "You're about to pay with cash." . PHP_EOL;
}