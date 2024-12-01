<?php
session_start();
include 'db_connect.php'; // Include your database connection

if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}

$user_id = $_SESSION['user_id'];
$role = $_SESSION['role'];

// Check if the user is an admin
if ($role == 'admin') {
    // Fetch all users for task assignment
    $users_query = "SELECT * FROM users WHERE role = 'user'";
    $users_result = mysqli_query($conn, $users_query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $role; ?></h1>

    <?php if ($role == 'admin'): ?>
        <h2>Assign Tasks</h2>
        <form action="assign_task.php" method="post">
            <select name="user_id" required>
                <option value="">Select User</option>
                <?php while ($user = mysqli_fetch_assoc($users_result)): ?>
                    <option value="<?php echo $user['id']; ?>"><?php echo $user['email']; ?></option>
                <?php endwhile; ?>
            </select>
            <input type="text" name="task_description" required placeholder="Task Description">
            <button type="submit">Assign Task</button>
        </form>
    <?php endif; ?>

    <h2>Your Tasks</h2>
    <ul>
        <?php
        // Fetch tasks for the logged-in user
        $tasks_query = "SELECT * FROM tasks WHERE user_id = $user_id";
        $tasks_result = mysqli_query($conn, $tasks_query);
        while ($task = mysqli_fetch_assoc($tasks_result)): ?>
            <li><?php echo $task['task_description']; ?></li>
        <?php endwhile; ?>
    </ul>

    <h2>Check In</h2>
    <form action="check_in.php" method="post">
        <button type="submit">Check In</button>
    </form>

    <a href="logout.php">Logout</a>
</body>
</html>
