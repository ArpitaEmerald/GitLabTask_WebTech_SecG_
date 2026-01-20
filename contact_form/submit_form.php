<?php
header("Content-Type: application/json");

include "db_connect.php";

$data = json_decode(file_get_contents("php://input"), true);

$stmt = $conn->prepare(
    "INSERT INTO contact_messages (name, email, phone, subject, message)
     VALUES (?, ?, ?, ?, ?)"
);

$stmt->bind_param(
    "sssss",
    $data['name'],
    $data['email'],
    $data['phone'],
    $data['subject'],
    $data['message']
);

if ($stmt->execute()) {
    $ref = $stmt->insert_id;
    echo json_encode([
        "success" => true,
        "message" => "Form submitted successfully! Reference No: " . $ref
    ]);
} else {
    echo json_encode([
        "success" => false,
        "message" => "Database insertion failed"
    ]);
}
