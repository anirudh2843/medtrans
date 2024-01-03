<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Medical Page</title>

    <?php
    include "includes/head_links.php";
    ?>

</head>
<body>
    <?php
    if (!isset($_SESSION["ID"])) {
    ?>
        <div id="header">
            <div class="container">
                <nav class="navbar">
                    <img src="img/log.jpg" class="logo">
                    <label for="" class="icons">
                        <i class='bx bx-menu'></i>
                    </label>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="main.php">Services</a></li>
                        <li><a href="about.php">About</a></li>
                    </ul>
                </nav>
                <div class="header-text">
                    <p>MED-TRANSLATOR</p>
                    <h1>"WRITING THE <br><span>LANGUAGE</span> OF HEALING"</h1>
                </div>
                <div class="btn btn-one">
                    <a href="login.php"><span> Lets Start</span></a>
                </div>
            </div>
            <?php
            } else {
            ?>
                <div id="header">
                    <div class="container">
                        <nav class="navbar">
                            <img src="img/log.jpg" class="logo">
                            <label for="" class="icons">
                                <i class='bx bx-menu'></i>
                            </label>
                            <ul>
                                <li>Hi, <?php echo $_SESSION["name"] ?></li>
                                <li><a class="nav-link" href="dashboard.php">
                                    <i class="fas fa-user"> </i> Dashboard</a></li>
                                    <li><a href="main.php">Translate</a></li>
                                    <li><a class="nav-link" href="logout.php">
                                        <i class="fas fa-sign-out-alt"></i>Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-text">
                        <p>MED-TRANSLATOR</p>
                        <h1>"WRITING THE <br><span>LANGUAGE</span> OF HEALING"</h1>
                    </div>
                    <div class="btn btn-one">
                    <a href="main.php"><span> Lets Start</span></a>
                </div> 
                </div>
                <?php
                }
                ?>
        </div>
</body>
</html>