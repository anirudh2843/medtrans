<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Medical Page</title>
</head>
<body>
    <div id="header">
        <div class="container">
        <nav class="navbar">
                    <img src="img/log.jpg" class="logo">
                    <ul>
                        <li><a href="index.php">Back</a></li>
                    </ul>
                </nav>
            <div class="wrapper">
                <form action="api/login_submit.php" method="POST">
                    <h1>Login</h1>
                    <div class="input-box">
                        <input type="text" name="email" placeholder="Email" required>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" placeholder="Password" required>
                        <i class='bx bxs-lock-alt' ></i>
                    </div>
                    <div class="remember-forgot">
                       <a href="#">Forgot Password</a>
                    </div>
                    <button type="submit" class="btn1">Login</button>
                    <div class="register-link">
                        <p>Don't have an account?<a href="register.php">register</a></p>
                    </div>
                </form>
                <script src="script.js"></script>
            </div>

           

        </div>
    </div>
    
</body>
</html> 
 
 
 
 
 
 
 
 
 
 
 
 
 
 