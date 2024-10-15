<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}

$user_id = $_SESSION['user_id'];

$query = "INSERT INTO attendance (user_id) VALUES ('$user_id')";
if (mysqli_query($conn, $query)) {
    echo "Checked in successfully!";
} else {
    echo "Error checking in: " . mysqli_error($conn);
}
?>
