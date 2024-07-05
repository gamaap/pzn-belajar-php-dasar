<?php 

//1. Integer

// decimal (base 10)
echo "Decimal : ";
var_dump(1234);

// octal (base 8)
echo "Octal : ";
var_dump(01234);

// hexadecimal (base 16)
echo "Hexadecimal: ";
var_dump(0x1A);

// binary (base 2)
echo "Binary: ";
var_dump(0b11111111);

// underscore in integer
echo "Underscore: ";
var_dump(1_234_567);

// 2. Floating Point
echo "Floating Point: ";
var_dump(1.234);
echo "Floating Point with notation: ";
var_dump(1.2e3); // 1.2 * 10^3
var_dump(1.2e-3); // 1.2 * 10^-3
echo "Underscore in floating point: ";
var_dump(1_234_567_890.123_456_789);

// overflow in integer (64-bit)
echo "Overflow: ";
var_dump(9223372036854775807); // not overflow
var_dump(9223372036854775808); // overflow
