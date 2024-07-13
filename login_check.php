<?php
$host = "localhost";
$user="root";
$password = "";
$db="work_order_management_system";

$data = mysqli_connect($host,$user,$password,$db);

if($data===false){
    die("Connection failed");
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username='".$name."' AND password='".$pass."'";
    $result = mysqli_query($data,$sql);
    $row = mysqli_fetch_array($result);

    if($row["usertype"] == "admin"){
        header("location: admin_dashboard.php");
    }elseif($row["usertype"] == "user"){
        header("location: user_dashboard.php");
    }elseif($row["usertype"] == "recommender"){
        header("location: recommender_dashboard.php");
    }else{
        $error = "Invalid username or password";
    }
    
}