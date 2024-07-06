<?php 

$username = null;
$defaultUsername = "user";

$displayName = $username ?? $defaultUsername;
echo $displayName . PHP_EOL;