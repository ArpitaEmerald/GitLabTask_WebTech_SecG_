<?php
include("session_check.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>

<h2>User Profile</h2>

<p><strong>Username:</strong> <?php echo $_SESSION['username']; ?></p>
<p><strong>Role:</strong> <?php echo $_SESSION['user_role']; ?></p>
<p><strong>Login Time:</strong> <?php echo $_SESSION['login_time']; ?></p>

<hr>

<a href="dashboard.php">Back to Dashboard</a> |
<a href="logout.php">Logout</a>

</body>
</html>
