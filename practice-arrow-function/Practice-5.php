<?php 

$fruits = ["apple", "banana", "cherry"];
$uppercase = fn($fruit) => strtoupper($fruit);

$uppercasedFruits = array_map($uppercase, $fruits);

var_dump($uppercasedFruits);