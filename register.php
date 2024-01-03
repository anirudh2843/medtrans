<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reg.css">
    <title>Medical Page</title>
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="img/log.jpg" class="logo">
                <ul>
                    <li><a href="login.php">Back</a></li>
                </ul>
            </nav>
        </div>
        <div class="form-container">
        <h2>Register</h2>
        <form action="api/submit.php" role="form" method="post">
            <label for="name">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="phone Number" required>

            <button type="submit">Register</button>
        </form>
    </div>
    </div>
    
</body>
</html>