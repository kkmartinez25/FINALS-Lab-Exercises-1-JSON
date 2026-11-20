<?php
// lab4_input.php2

// Step 1: Display as plain text (not JSON) since we are printing labeled values
header('Content-Type: text/plain');

// Step 2: Read the raw request body
$rawInput = file_get_contents('php://input');

// Step 3: Decode the JSON into a PHP associative array
$data = json_decode($rawInput, true);

// Step 4: Access and display the received values
echo "Username: " . $data['username'] . "\n";
echo "Password: " . $data['password'];
