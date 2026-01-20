<?php
$host = "localhost";
$user = "root";
$pass = "";          // keep empty if no password
$db   = "contact_app";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
