<?php 

// simple function with argument
function sayHello($name)
{
  echo "Hello, $name" . PHP_EOL;
}

sayHello("John");

// function with default argument value
function sayGoodMorning($name = "Anonymous")
{
  echo "Good Morning, $name" . PHP_EOL;
}

sayGoodMorning(); // use default parameter if no argument pass
sayGoodMorning("Gama");

// NOTE : Do not place default parameter value in the first parameter, it will not be useful at all

function sayComplete($firstName, $lastName = "") // use the default value in the last param
{
  echo "Hi, $firstName $lastName" . PHP_EOL;
}

sayComplete("John");
sayComplete("Jane");
sayComplete("John", "Doe");

// type declaration in parameter
function sum(int $first, int $last)
{
  $total = $first + $last;
  echo "Total $first + $last = $total" . PHP_EOL;
}

sum(10, 10);
sum("10", "10"); // success, php will do type juggling
sum(true, false); // also success, in PHP true equal to 1 and false to 0
// sum([], []);  error

// variable-length argument list
function sumAll(...$values) // if the parameter more than 1, place this in the last parameter
{
  $total = 0;
  foreach($values as $value) {
    $total += $value;
  }

  echo "Total: " . implode(", ", $values) . " = $total" . PHP_EOL;
}

sumAll(1, 2, 3, 4, 5); // call arguments with variable length argument list

// if we already have an array
$arr = [1, 2, 3, 4, 5];
sumAll(...$arr); // call arguments if it array and pass it to variable-length argument list