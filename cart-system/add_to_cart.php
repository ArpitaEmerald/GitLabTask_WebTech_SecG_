<?php
session_start();

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];

if (isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id]['quantity']++;
} else {
    $_SESSION['cart'][$id] = [
        'product_id' => $id,
        'product_name' => $name,
        'price' => $price,
        'quantity' => 1
    ];
}

header("Location: products.php");
exit();
