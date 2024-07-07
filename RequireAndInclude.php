<?php 

require "Lib/MyFunction.php"; // require will throw error if file not found and program will stop
// or use include, this will throw warning if file not found and program will continue
// include "Lib/MyFunction.php"; // I have to comment this because redeclaring function will throw error

// to prevent redeclaration, use include_once or require_once
// include_once "Lib/MyFunction.php";
// require_once "Lib/MyFunction.php";

echo sayHello("Gama", "Anggadipa") . PHP_EOL;