<?php 

$age = 26;

if($age >= 18) {
  echo "College." . PHP_EOL;
} else if($age >= 14 && $age <= 17) {
  echo "High School." . PHP_EOL;
} else if($age >= 11 && $age <= 13) {
  echo "Middle School." . PHP_EOL;
} else if($age >= 6 && $age <= 10) {
  echo "Elementary." . PHP_EOL;
} else { 
  echo "Too young for school." . PHP_EOL;
}