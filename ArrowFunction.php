<?php 

$firstName = "John";
$lastName = "Doe";

// with anonymous function
$anonymousFunction = function() use ($firstName, $lastName) {
  return "Hello, $firstName $lastName";
};

// with arrow function
// can be used with simple function and must return a value
// do not use "use" keyword to access global variable
$arrowFunction = fn() => "Hello, $firstName $lastName";

echo $anonymousFunction() . PHP_EOL;
echo $arrowFunction() . PHP_EOL;