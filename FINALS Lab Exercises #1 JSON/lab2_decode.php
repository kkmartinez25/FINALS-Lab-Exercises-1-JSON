<?php
// lab2_decode.php

// Step 1: Declare a JSON string with name, age, and email
$jsonString = '{"name":"Maria","age":22,"email":"maria@example.com"}';

// Step 2: Decode into a PHP object (default behavior)
$object = json_decode($jsonString);

// Step 3: Decode into a PHP associative array (second parameter true)
$array = json_decode($jsonString, true);

// Step 4: Display individual values in both formats
echo "Object: " . $object->name . "<br>";
echo "Array: " . $array["email"];
