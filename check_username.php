<?php
header("Content-Type: application/json");

$existingUsers = [
    "admin",
    "john",
    "sarah",
    "mike",
    "alex",
    "david",
    "emma",
    "lisa",
    "robert",
    "james"
];

$username = isset($_GET['username']) ? strtolower(trim($_GET['username'])) : "";

if ($username === "") {
    echo json_encode([
        "available" => false,
        "message" => "Username is empty"
    ]);
    exit;
}

if (in_array($username, array_map('strtolower', $existingUsers))) {
    echo json_encode([
        "available" => false,
        "message" => "Username already taken ❌"
    ]);
} else {
    echo json_encode([
        "available" => true,
        "message" => "Username available ✅"
    ]);
}
