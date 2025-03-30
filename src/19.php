<?php
// Define variables and constants
$student_name = "John Doe";
$password = "secretpassword123";

// Check if user is logged in
if (isset($_SESSION["username"]) && $_SESSION["username"] == $student_name) {
    // User is logged in, show welcome message
    echo "Welcome, " . htmlspecialchars($student_name) . "! Please proceed.";
} else {
    // User is not logged in, redirect to login page
    header("Location: login.php");
}
?>
