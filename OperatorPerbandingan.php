<?php 

var_dump(10 == "10"); // true, string 10 converted to integer 10 because of "type juggling"
var_dump(10 === "10"); // false, because 10 is not equal to "10"
var_dump(10 != "10"); // false
var_dump(10 !== "10"); // true
var_dump(10 > 5); // true
var_dump(10 >= 10); // true
var_dump(10 < 5); // false
var_dump(10 <= 10); // false