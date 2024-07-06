<?php 

$season = "winter";

switch($season) {
  case "spring":
    echo "This current season is $season." . PHP_EOL;
    break;
  case "summer":
    echo "This current season is $season." . PHP_EOL;
    break;
  case "autumn":
    echo "This current season is $season." . PHP_EOL;
    break;
  case "winter":
    echo "This current season is $season." . PHP_EOL;
    break;
  default:
    echo "That is not valid season in this country" . PHP_EOL;
}