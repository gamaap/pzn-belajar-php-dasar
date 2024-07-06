<?php 

$age = 26;
$experience = 2;

if ($age < 18) {
  echo "Not eligible for insurance." . PHP_EOL;
} else if ($age >= 18 && $age <= 25) {
  if ($experience < 2) {
    echo "Medium Premium" . PHP_EOL;
  } else {
    echo "Low Premium" . PHP_EOL;
  }
} else { // age above 25
  if ($experience < 2) {
    echo "Medium Premium" . PHP_EOL;
  } else {
    echo "Low Premium" . PHP_EOL;
  }
}
