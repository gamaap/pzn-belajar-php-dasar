<?php 

// while loop
$password = "secret";

while(true) {
  echo "Enter Password: ";
  $input = trim(fgets(STDIN));
  if($input === $password) {
    echo "You are logged in." . PHP_EOL;
    break;
  }
  echo "Wrong Password. Please Try Again." . PHP_EOL;
}

// do while loop (this is better version)
do {
  $input = readline("Enter Password: ");
} while($input !== $password);
echo "Password Accepted!" . PHP_EOL;