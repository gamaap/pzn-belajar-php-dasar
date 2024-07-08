<?php 

function toUpperCase(string $string): string
{
  return strtoupper($string);
}

function toLowerCase(string $string): string
{
  return strtolower($string);
}

function capitalize(string $string): string
{
  return ucwords($string);
}
function reverseString(string $string): string
{
  return strrev($string);
}

$upper = "toUpperCase";
echo $upper("gama anggadipa pratama") . PHP_EOL;

$lower = "toLowerCase";
echo $lower("GAMA ANGGADIPA PRATAMA") . PHP_EOL;

$reversed = "reverseString";
echo $reversed("Gama Anggadipa Pratama") . PHP_EOL;

$capitalized = "capitalize";
echo $capitalized("gama anggadipa pratama") . PHP_EOL;