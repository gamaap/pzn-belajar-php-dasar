<?php 

// simple anonymous function
$sayHello = function(string $name) {
  echo "Hello $name" . PHP_EOL;
};

$sayHello("Gama");
$sayHello("John");

// anonymous function as closure
function sayGoodEvening(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Good Evening, $finalName" .  PHP_EOL;
}

sayGoodEvening("Gama", function(string $name): string {
  return strtoupper($name);
});

// or use variable function
$filterFunction = function(string $name): string {
  return strtolower($name);
};

sayGoodEvening("Jack", $filterFunction);

// anonymous function cannot access global variable unless use "use" keyword
$firstName = "Gama";
$lastName = "Anggadipa";

$sayGoodNight = function() use ($firstName, $lastName) {
  echo "Good Night, $firstName $lastName" . PHP_EOL;
};

$sayGoodNight();

$firstName = "John";
$lastName = "Doe";
// this will not replace the initial variable used inside anonymous function
$sayGoodNight();