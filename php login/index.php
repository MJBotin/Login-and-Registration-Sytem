<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <script src="script.js" defer></script>
</head>
<body>
    <div class="container" id="container">
        <!-- Sign Up form -->
        <div class="form-container sign-up-container">
            <form action="register.php" method="POST">
                <h1>Join Us</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Use Your Email To SignUp</span>
                <input type="text" name="fullname" placeholder="Enter your name" required />
                <input type="email" name="email" placeholder="Enter Your Email" required />
                <input type="password" name="password" placeholder="Create password" required />
                <button type="submit">Register</button>
            </form>
        </div>

        <!-- Sign In form -->
        <div class="form-container sign-in-container">
            <form action="login.php" method="POST">
                <h1>Login</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Use Your Account login</span>
                <input type="email" name="email" placeholder="Enter your email" required />
                <input type="password" name="password" placeholder="Enter your password" required />
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
