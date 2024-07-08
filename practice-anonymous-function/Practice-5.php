<?php 

$array = ["hello", "world", "foo", "bar"];

array_walk($array, function(string &$value) {
  $value = strtoupper($value);
});

echo "Uppercased strings: [\"" . implode('", "', $array) . "\"]" . PHP_EOL;