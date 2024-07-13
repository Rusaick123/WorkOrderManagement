<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Order Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="nav-bar">
    <div id="image">
        <img src="img/logo.jpeg" alt="Logo">
        <h1>Work Order Management System</h1>
    </div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>   
</nav>
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
