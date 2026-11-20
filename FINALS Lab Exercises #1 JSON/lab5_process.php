<?php
// lab5_process.php
// Objective: Receive JSON from the frontend, process it, and respond in JSON.

// Step 1: Respond with JSON
header('Content-Type: application/json');

// Step 2: Read the raw request body sent by fetch()
$rawInput = file_get_contents('php://input');

// Step 3: Decode the JSON into a PHP associative array
$data = json_decode($rawInput, true);

// Step 4: Get the name the user sent
$name = isset($data['name']) ? trim($data['name']) : '';

// Step 5: Build the response array
if ($name === '') {
    $response = array(
        "status"  => "error",
        "message" => "Name is required."
    );
} else {
    $response = array(
        "status"  => "success",
        "message" => "Welcome, " . $name . "!"
    );
}

// Step 6: Output the JSON response
echo json_encode($response);
