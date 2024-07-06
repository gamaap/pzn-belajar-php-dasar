<?php 

$a = 10;
$a++; // $a = $a + 1
var_dump($a);

// post-increment
$b = $a++; // $b = $a, $a = $a + 1 (assign first then increment)
var_dump($b);
var_dump($a);

$c = ++$a; // $a = $a + 1, $c = $a (increment first then assign)
var_dump($c);
var_dump($a);