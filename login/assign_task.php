<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: index.html");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $task_description = $_POST['task_description'];

    $query = "INSERT INTO tasks (user_id, task_description) VALUES ('$user_id', '$task_description')";
    if (mysqli_query($conn, $query)) {
        echo "Task assigned successfully!";
    } else {
        echo "Error assigning task: " . mysqli_error($conn);
    }
}
?>
