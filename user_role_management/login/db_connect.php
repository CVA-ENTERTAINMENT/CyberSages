<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // If using XAMPP, the default password is usually empty
$dbname = "system"; // Replace with your actual database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>