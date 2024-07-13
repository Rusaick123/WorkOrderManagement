<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Order Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="content">
    <div class="login-container">
        <form class="login-form" action="register_check.php" method="post">
            <h2>User Registration</h2>
            <div class="form-group">
                <label for="userid">User Id:</label>
                <input type="text" id="userid" name="userid" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="usertype">User Type:</label>
                <select id="usertype" name="usertype" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <select id="department" name="department" required>
                    <option value="Office of the Dean">Office of the Dean</option>
                    <option value="Dept. of Languages">Dept. of Languages</option>
                    <option value="Dept. of Political Sciences">Dept. of Political Sciences</option>
                </select>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
