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
            <form class="login-form" action="login_check.php" method="post">
                <h2>Login</h2>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" >
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
