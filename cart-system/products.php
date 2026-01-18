<?php
session_start();

// Initialize cart
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Item count
$item_count = 0;
foreach ($_SESSION['cart'] as $item) {
    $item_count += $item['quantity'];
}

// Products array
$products = [
    1 => ["name" => "Laptop", "price" => 750],
    2 => ["name" => "Smartphone", "price" => 500],
    3 => ["name" => "Headphones", "price" => 80],
    4 => ["name" => "Keyboard", "price" => 40],
    5 => ["name" => "Mouse", "price" => 25]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

<h2>Electronics Store</h2>
<p>🛒 Cart Items: <strong><?php echo $item_count; ?></strong> |
<a href="cart.php">View Cart</a></p>

<hr>

<?php foreach ($products as $id => $product): ?>
    <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
        <img src="https://via.placeholder.com/150" alt="Product Image"><br>
        <strong><?php echo $product['name']; ?></strong><br>
        Price: $<?php echo $product['price']; ?><br><br>

        <form action="add_to_cart.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
            <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
            <button type="submit">Add to Cart</button>
        </form>
    </div>
<?php endforeach; ?>

</body>
</html>
