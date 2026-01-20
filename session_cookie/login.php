<?php
session_start();

// Redirect if already logged in
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

$message = "";

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Hardcoded credentials
    if ($username === "admin" && $password === "admin123") {
        $_SESSION['username'] = $username;
        $_SESSION['login_time'] = date("Y-m-d H:i:s");
        $_SESSION['user_role'] = "Administrator";

        header("Location: dashboard.php");
        exit();
    } else {
        $message = "❌ Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Member Login</h2>

<?php if ($message): ?>
    <p style="color:red;"><?php echo $message; ?></p>
<?php endif; ?>

<form method="post">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>

</body>
</html>
