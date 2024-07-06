<?php 

$grade = "D";

// without switch
if ($grade == "A") {
  echo "Excellent" . PHP_EOL;
} else if ($grade == "B" || $grade == "C") {
  echo "Good" . PHP_EOL;
} else if($grade == "D") {
  echo "Poor" . PHP_EOL;
} else {
  echo "Failed" . PHP_EOL;
}

// with switch
switch($grade) {
  case "A":
    echo "Excellent" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "Good" . PHP_EOL;
    break;
  case "D":
    echo "Poor" . PHP_EOL;
    break;
  default:
    echo "Failed" . PHP_EOL;
}

// alternative syntax (only in PHP)
switch($grade) :
  case "A":
    echo "Excellent" . PHP_EOL;
    break;
  case "B":
  case "C":
    echo "Good" . PHP_EOL;
    break;
  case "D":
    echo "Poor" . PHP_EOL;
    break;
  default:
    echo "Failed" . PHP_EOL;
endswitch;