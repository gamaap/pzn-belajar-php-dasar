<?php 

/**
 * https://www.php.net/manual/en/ref.strings.php
 */

var_dump(implode(", ", [1, 2, 3, 4, 5])); // convert array to string
var_dump(explode(" ", "Gama Anggadipa Pratama")); // convert string to array
var_dump(strtoupper("gama anggadipa pratama")); // convert string to uppercase
var_dump(strtolower("GAMA ANGGADIPA PRATAMA")); // convert string to lowercase
var_dump(trim("  Gama Anggadipa Pratama  ")); // trim string in the first and last
var_dump(substr("Gama Anggadipa Pratama", 0, 4)); // get some string from the original string