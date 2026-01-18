<?php
include("session_check.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Dashboard</h2>

<p>✅ Welcome, <strong><?php echo $_SESSION['username']; ?></strong></p>
<p>Role: <?php echo $_SESSION['user_role']; ?></p>
<p>Login Time: <?php echo $_SESSION['login_time']; ?></p>

<hr>

<a href="profile.php">View Profile</a> |
<a href="logout.php">Logout</a>

</body>
</html>
