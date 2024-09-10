<?php
include('db_connect.php');
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Fetch users and roles for admin functions
$users = $conn->query("SELECT * FROM users");
$roles = $conn->query("SELECT * FROM roles");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $role_id = $_POST['role_id'];

    // Update user role
    $stmt = $conn->prepare("REPLACE INTO user_roles (user_id, role_id) VALUES (?, ?)");
    $stmt->bind_param("ii", $user_id, $role_id);
    $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Admin Dashboard</h2>
        <form method="POST">
            <label for="user">Select User:</label>
            <select name="user_id" id="user" required>
                <?php while ($user = $users->fetch_assoc()): ?>
                    <option value="<?php echo $user['id']; ?>"><?php echo $user['username']; ?></option>
                <?php endwhile; ?>
            </select>

            <label for="role">Select Role:</label>
            <select name="role_id" id="role" required>
                <?php while ($role = $roles->fetch_assoc()): ?>
                    <option value="<?php echo $role['id']; ?>"><?php echo $role['role_name']; ?></option>
                <?php endwhile; ?>
            </select>

            <button type="submit">Update Role</button>
        </form>
    </div>
</body>
</html>
