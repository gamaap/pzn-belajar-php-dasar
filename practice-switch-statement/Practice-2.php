<?php 

$role = "subscriber";

switch($role) {
  case "admin":
    echo "You have permission to all features" . PHP_EOL;
    break;
  case "editor":
    echo "You have permission to only editing and viewing" . PHP_EOL;
    break;
  case "author":
    echo "You have permission to only viewing" . PHP_EOL;
    break;
  case "subscriber":
    echo "You do not have permission at all" . PHP_EOL;
    break;
  default:
    echo "You do not authorized" . PHP_EOL;
}