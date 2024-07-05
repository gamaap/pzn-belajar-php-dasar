<?php 

// Single quote
echo 'Name: ';
echo 'John Doe';
echo "\n"; // escape sequence for new line, this is work with double quotes only

// Double quote
echo "Name: ";
echo "Mary\t Jane"; // escape sequence for tab
echo "\n";

// multiline string
echo <<<TEXT
Hello, World!
This is my first PHP program
TEXT;
// or
echo <<<'TEXT'
Hello, World!
This is my first PHP program
TEXT;