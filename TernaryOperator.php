<?php 

$gender = "Male";
$hi = "";

// without ternary operator
if($gender == "Male") {
  $hi = "Hi, Mr.";
} else {
  $hi = "Hi. Mrs.";
}

echo $hi . PHP_EOL;

// with ternary operator
$hi = $gender == "Male" ? "Hi, Mr." : "Hi, Mrs.";
echo $hi . PHP_EOL;