<?php 

// NOTE
// do not adopt this feature too often (avoid if possible), as this is too confusing

// simple goto
goto here;
echo "Hello, World" . PHP_EOL;

here:
echo "Hello, John" . PHP_EOL;

// complex goto
$counter = 1;

while (true) {
  echo "This is while loop with break number-$counter" . PHP_EOL;
  $counter++;

  if($counter > 10) {
    goto end; // this will also stop the loop
  }
}

end:
echo "End Loop" . PHP_EOL;