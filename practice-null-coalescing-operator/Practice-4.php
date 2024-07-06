<?php 

$_ENV = [
  "config" => "dbroot"
];

$_SERVER = [
  "config" => "dbuser"
];

$config = $_ENV['config'] ?? $_SERVER['config'] ?? "default config";
echo $config . PHP_EOL;