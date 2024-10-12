<?php
session_start();
include 'db_connect.php'; // Include your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to verify user in the database
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user_id'] = $email;
        header("Location: dashboard.php"); // Redirect to a dashboard page after login
        exit();
    } else {
        echo "Invalid email or password.";
    }
}
?>
