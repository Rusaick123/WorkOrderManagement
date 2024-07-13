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
<div class="register-container">
    <form class="register-form" action="register_check.php" method="post">
        <h2>Register</h2>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="emailid">Email ID:</label>
            <input type="email" id="emailid" name="emailid" required>
        </div>
        <div class="form-group">
            <label for="usertype">User Type:</label>
            <select id="usertype" name="usertype" required>
                <option value="user">User</option>
                <option value="recommender">Recommender</option>
            </select>
        </div>
        <div class="form-group">
            <label for="department">Department:</label>
            <select name="department" id="department" required>
                <option value="IT">IT</option>
                <option value="HR">HR</option>
                <option value="Finance">Finance</option>
            </select>
        </div>
        <input type="submit" value="Register">
    </form>
</div>
<?php include 'footer.php';?>
</body>
</html>