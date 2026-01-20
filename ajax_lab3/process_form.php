<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
 if (empty($name)) {
       echo "Error: Name field is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        echo "Error: Please enter a valid email address.";
    } else {
        
        echo "Success! Hello " . htmlspecialchars($name) . ", your form has been processed.";
    }
} else {
    echo "Error: Invalid request method.";
}
?>