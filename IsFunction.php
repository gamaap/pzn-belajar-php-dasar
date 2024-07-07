<?php 

/**
 * https://www.php.net/manual/en/ref.var.php
 */

// all of this function returns boolean

var_dump(is_string("")); // true
var_dump(is_string("Gama Anggadipa Pratama")); // true
var_dump(is_string(123)); // false
var_dump(is_string(true)); // false

var_dump(is_int(123)); // true
var_dump(is_int("123")); // false

var_dump(is_bool(true)); // true
var_dump(is_bool("true")); // false
var_dump(is_bool(0)); // false

var_dump(is_array([])); // true
var_dump(is_array(["Gama", "Anggadipa", "Pratama"])); // true
var_dump(is_array("Gama Anggadipa Pratama")); // false
var_dump(is_array(123)); // false

var_dump(is_float(123.0)); // true
var_dump(is_float("123.0")); // false

var_dump(is_null(null)); // true
var_dump(is_null(0)); // false