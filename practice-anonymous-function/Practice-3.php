<?php 

$array = ["abc", "a", "abcd", "ab"];

$sorted = usort($array, function($a, $b) {
  return strlen($a) - strlen($b);
});

echo "Sorted by length: [\"" . implode('", "', $array) . "\"]" . PHP_EOL;