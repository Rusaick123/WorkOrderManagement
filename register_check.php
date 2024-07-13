<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "work_order_management_system";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection failed");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST['userid'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $usertype = $_POST['usertype'];
    $password = $_POST['password'];
    $department = $_POST['department'];

    // Password hashing for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (userid, username, email, usertype, password, department) VALUES (?, ?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($data, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssssss", $userid, $username, $email, $usertype, $hashed_password, $department);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: login.php");
        } else {
            echo "Error: Could not execute the query: " . mysqli_error($data);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error: Could not prepare the query: " . mysqli_error($data);
    }
}
?>
