<?php 

$userData = [
  "age" => "26"
];

$userAge = $userData["age"] ?? "18";
echo $userAge . PHP_EOL;