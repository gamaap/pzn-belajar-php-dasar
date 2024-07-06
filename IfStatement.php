<?php 

$grade = 80;
$absent = 60;

if ($grade >= 80 && $absent >= 80) {
  echo "You passed with excellent grades." . PHP_EOL;
} else if ($grade >= 70 && $absent >= 70) {
  echo "You passed with good grades." . PHP_EOL;
} else if($grade >= 60 && $absent >= 60) {
  echo "You passed with average grades." . PHP_EOL;
} else if($grade >= 50 && $absent >= 50) {
  echo "You passed with low average grades." . PHP_EOL;
} else {
  echo "You failed." . PHP_EOL;
}

// alternative syntax (only in PHP)
if ($grade >= 80 && $absent >= 80) :
  echo "You passed with excellent grades." . PHP_EOL;
elseif ($grade >= 70 && $absent >= 70) :
  echo "You passed with good grades." . PHP_EOL;
elseif($grade >= 60 && $absent >= 60) :
  echo "You passed with average grades." . PHP_EOL;
elseif($grade >= 50 && $absent >= 50) :
  echo "You passed with low average grades." . PHP_EOL;
else :
  echo "You failed." . PHP_EOL;
endif;