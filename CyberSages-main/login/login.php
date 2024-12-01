<?php
session_start();
include 'db_connect.php'; // Include your database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to verify user in the database
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result); // Fetch the user data

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role']; // Store the user role in session
        header("Location: dashboard.php"); // Redirect to a dashboard page after login
        exit();
    } else {
        echo "Invalid email or password.";
    }
}
?>
