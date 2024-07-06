<?php 

function getUserPreference()
{
  return null;
}

$_COOKIE = [
  "preference" => "custom"
];

$userPreference = getUserPreference() ?? $_COOKIE['preference'] ?? 'default preference';
echo $userPreference . PHP_EOL;