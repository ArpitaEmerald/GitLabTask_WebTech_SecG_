<?php
header("Content-Type: application/json");

$file = "students.json";

// Check if JSON file exists
if (!file_exists($file)) {
    echo json_encode([
        "error" => "Student data file not found."
    ]);
    exit;
}

// Read JSON file
$jsonData = file_get_contents($file);

// Decode JSON to PHP array
$data = json_decode($jsonData, true);

// Check for empty or invalid data
if (empty($data)) {
    echo json_encode([
        "error" => "No student data available."
    ]);
    exit;
}

// Encode PHP array back to JSON
echo json_encode($data);
