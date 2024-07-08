<?php 

function greetMorning()
{
  echo "Good Morning" . PHP_EOL;
}

function greetEvening()
{
  echo "Good Evening" . PHP_EOL;
}

$goodMorning = "greetMorning";
$goodMorning();

$goodevening = "greetEvening";
$goodevening();