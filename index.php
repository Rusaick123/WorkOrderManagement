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
    
    <div class="welcome-container">
        <h2>Welcome to the Work Order Management System</h2>
        <p>This system helps you manage and track work orders efficiently and effectively.</p>
        <p>Use the navigation bar to explore the system and manage your work orders.</p>
        
        <div class="functions-container">
            <div class="functions-grid">
                <div class="function-item">
                    <img src="img/create_work_order.png" alt="Create Work Order">
                    <h4>Create Work Order</h4>
                    <p>Easily create new work orders with detailed information.</p>
                </div>
                <div class="function-item">
                    <img src="img/manage_work_order.png" alt="Manage Work Order">
                    <h4>Manage Work Order</h4>
                    <p>Efficiently assign, update, and track work orders.</p>
                </div>
                <div class="function-item">
                    <img src="img/print_work_order.png" alt="Print Work Order">
                    <h4>Print Work Order</h4>
                    <p>Generate and print detailed work order reports.</p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
