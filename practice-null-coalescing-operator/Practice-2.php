<?php 

$_POST = [
  "email" => "gama@example.com"
];

$defaultEmail = "user@example.com";

$email = $_POST["email"] ?? $defaultEmail;
echo $email . PHP_EOL;