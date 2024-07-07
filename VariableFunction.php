<?php 

function foo()
{
  echo "FOO" . PHP_EOL;
}

function bar()
{
  echo "BAR" . PHP_EOL;
}

$foo = "foo";
$foo();

$bar = "bar";
$bar();

function sayHello(string $name, $filter)
{
  $finalName = $filter($name);
  echo "Hello, $finalName." . PHP_EOL;
}

function sampleFunction(string $name): string
{
  return "Sample $name";
}

sayHello("John", "sampleFunction");
sayHello("Jane", "strtoupper");
sayHello("Doe", "strtolower");