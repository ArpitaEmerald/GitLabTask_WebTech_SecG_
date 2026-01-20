<?php
header("Content-Type: application/json");

$email = $_GET['email'] ?? "";

$existing = ["test@gmail.com", "admin@mail.com"];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["valid"=>false,"message"=>"Invalid email"]);
    exit;
}

if (in_array(strtolower($email), array_map('strtolower',$existing))) {
    echo json_encode(["valid"=>false,"message"=>"Email already exists"]);
} else {
    echo json_encode(["valid"=>true,"message"=>"Email valid"]);
}
