<?php 

$isLoggedIn = true;

$status = $isLoggedIn ? "Welcome, User!" : "Please log in";
echo $status . PHP_EOL;