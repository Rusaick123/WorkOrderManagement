<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Order Management System</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>
    <div class="top-nav">
        <div class="top-nav-left">
        <img src="img/logo.jpeg" alt="Logo">
        <h1>Work Order Management System</h1>
        </div>
        <div class="top-nav-right">
            <span id="userId">UserID: admin123</span>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>
    <div class="main-container">
        <?php include 'sidebar.php'?>
        <div class="content">
            <iframe name="content-frame" frameborder="0" style="width: 100%; height: calc(100vh - 160px);"></iframe>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Work Order Management System. All rights reserved.</p>
    </div>
</body>
</html>
