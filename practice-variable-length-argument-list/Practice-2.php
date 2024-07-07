<?php 

function concatString(...$strings)
{
  $concat = "";
  foreach($strings as $string) {
    $concat .= $string;
    $concat .= " ";
  }
  echo "Concatenated String: " . implode(", ", $strings) . " = " . trim($concat) . PHP_EOL;
}

concatString("Hello", "World", "How", "Are", "You");