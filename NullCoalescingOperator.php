<?php 

$data = [
  "action" => null
];

// without null coalescing operator
if(isset($data["action"])) {
  $action = $data["action"];
} else {
  $action = "Nothing";
}

echo $action . PHP_EOL;

// with null coalescing operator
$action = $data["action"] ?? "Nothing";
echo $action . PHP_EOL;