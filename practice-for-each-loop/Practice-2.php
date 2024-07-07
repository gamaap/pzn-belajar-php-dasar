<?php 

$fruits = ["apple", "strawberries", "banana", "blueberry", "cherry"];

$longest = 0;
$strLongest = "";
foreach($fruits as $fruit) {
  if(strlen($fruit) > $longest)  {
    $longest = strlen($fruit);
    $strLongest = $fruit;
  }
}

echo "Longest fruit: $strLongest" . PHP_EOL;