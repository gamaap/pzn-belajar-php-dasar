<?php 

function sayHello()
{
  echo "Hello Function" . PHP_EOL;
}

sayHello();
sayHello();
sayHello();

// possible to declare function inside if for example
$create = false;
if($create) {
  function sayHelloAgain()
  {
    echo "Hello Again Function" . PHP_EOL;
  }
}

sayHelloAgain(); // error