<?php
// lab1_encode.php


// Step 1: Declare a PHP associative array with keys: name, age, and course
$student = array(
    "name"   => "Maria",
    "age"    => 21,
    "course" => "BS Information Technology"
);

// Step 2: Use json_encode() to convert the array to a JSON string
$jsonString = json_encode($student);

// Step 3: Output the JSON string in the browser
echo $jsonString;
?>
