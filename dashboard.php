<?php
session_start();
require "includes/database_connect.php";

$user_id = $_SESSION['ID'];

$sql_1 = "SELECT * FROM users WHERE ID = $user_id";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!";
    return;
}
$user = mysqli_fetch_assoc($result_1);
if (!$user) {
    echo "Something went wrong!";
    return;
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Medical Page</title>
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="img/log.jpg" class="logo">
                <ul>
                    <li><a href="index.php">Back</a></li>
                </ul>
            </nav>
        </div>
        <div class="my-profile page-container">
        <h1  align="center">My Profile</h1>
        <div class="row">
            <div class="col-md-3 profile-img-container">
                <i class="fas fa-user profile-img"></i>
            </div>
            <div class="col-md-9">
                <div class="row no-gutters justify-content-between align-items-end">
                    <div class="profile">
                        <div class="name">
                            <label for="name">Name  :</label>
                            <?= $user['name'] ?></div>
                        <div class="email">Email  :<?= $user['email'] ?></div>
                        <div class="phone"> Phone number :  <?= $user['phone'] ?></div>
                        <div class="gender">Gender  :  <?= $user['gender'] ?></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
</body>
</html>



















<!-- <?php
session_start();
$user_id=$_SESSION['ID'];
$name=$_SESSION['name'];
echo "hello ". $name ;
?> -->