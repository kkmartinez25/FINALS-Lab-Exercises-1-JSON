<?php
// lab3_api.php

// Step 1: Set the JSON to header
header('Content-Type: application/json');

// Step 2: Create an array with user profile information
$profile = array(
    "id"     => 1,
    "name"   => "Maria",
    "email"  => "maria@example.com",
    "status" => "active"
);

// Step 3: Encode the array as JSON and output the response
echo json_encode($profile);
