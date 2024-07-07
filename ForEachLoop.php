<?php 

// without foreach
$names = ["Gama", "Anggadipa", "Pratama"];

for($i = 0; $i < count($names); $i++) {
  echo $names[$i] . PHP_EOL;
}

// with foreach (no index/key needed)
foreach($names as $name) {
  echo $name . PHP_EOL;
}

$person = [
  "first_name" => "Gama",
  "middle_name" => "Anggadipa",
  "last_name" => "Pratama"
];

// with foreach (with index/key needed)
foreach($names as $key => $name) {
  echo "Person " . $key + 1 . " = $name" . PHP_EOL;
}

foreach($person as $key => $value) {
  echo "My $key is $value" . PHP_EOL;
}