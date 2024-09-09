<?php
session_start();
require 'db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$roleId = $_SESSION['role_id'];
$users = $conn->query("SELECT users.id, users.username, roles.role_name FROM users LEFT JOIN roles ON users.role_id = roles.id");
$roles = $conn->query("SELECT * FROM roles");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_POST['user_id'];
    $newRoleId = $_POST['role_id'];

    $stmt = $conn->prepare("UPDATE users SET role_id = ? WHERE id = ?");
    $stmt->bind_param("ii", $newRoleId, $userId);
    
    if ($stmt->execute()) {
        header("Location: admin_dashboard.php");
    }
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
    <h2>Admin Dashboard</h2>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($user = $users->fetch_assoc()) { ?>
                <tr>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['role_name'] ?: 'No Role' ?></td>
                    <td>
                        <form method="POST" action="admin_dashboard.php">
                            <select name="role_id">
                                <?php while ($role = $roles->fetch_assoc()) { ?>
                                    <option value="<?= $role['id'] ?>" <?= $user['role_name'] == $role['role_name'] ? 'selected' : '' ?>><?= $role['role_name'] ?></option>
                                <?php } ?>
                            </select>
                            <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                            <button type="submit">Update Role</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
