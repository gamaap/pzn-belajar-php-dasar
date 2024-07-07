<?php 

function sayHello(string $name, callable $filter)
{
  $finalName = call_user_func($filter, $name);
  echo "Hello, $finalName." . PHP_EOL;
}

// Variable Function
sayHello("Gama", "strtoupper");
sayHello("Gama", "strtolower");

// Anonymous Function
sayHello("Gama", function(string $name): string{
  return strtoupper($name);
});

// Arrow Function
sayHello("Gama", fn(string $name): string => strtolower($name));