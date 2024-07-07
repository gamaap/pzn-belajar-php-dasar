<?php 

// GLOBAL SCOPE
$name = "Gama"; // global scope, can be accessed from anywhere
// or use $GLOBALS, define variable in global scope will equal to
// $GLOBALS['name'] = "Gama";

function sayHello()
{
  // echo $name . PHP_EOL; // error, because global scope is not accesible from inside a function
  global $name; // global keyword, used to access global variable
  // or
  // echo $GLOBALS['name'] . PHP_EOL;
  echo $name . PHP_EOL;
}

// LOCAL SCOPE
function sayHelloAgain()
{
  $person = "Gama"; // local scope, accessible from inside this function
}

sayHelloAgain();
// echo $person; //error, because local scope is not accesible from outside a function or another function

// STATIC SCOPE
function increment()
{
  static $counter = 1; // static keyword, variable will not be resetted when function is called again

  echo $counter . PHP_EOL;
  $counter++;
}

increment();
increment();
increment();