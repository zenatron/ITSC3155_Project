<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/cclogo.png" type="image/x-icon">
    <title>Login - Career Craft</title>
    <meta name="author" content="your name">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <div class="logo-home">
            <a class="logo-home" href="./home.html">
              <img src="../images/cclogo.png" alt="Logo" class="logo">
            </a>
            <h1>Career Craft</h1>
        </div>
        <div>
            <button class="button" onclick="window.location='register.php'">Sign Up</button>
        </div>
    </header>
    <main>  
        <h1 class="center-text">Log In to Career Craft</h1>
        <form method="POST" action="login.php" class="form-style">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" class="button">Log In</button>
        </form>
    </main>
    <footer>
        <p class="center-text">&copy;Career Craft 2024. All rights reserved.</p>
    </footer>
</body>
</html>
