<?php
// This can be where you add any login validation logic if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - FoodExpress</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background-color: #f4f4f4;
    }

    /* Navigation */
    nav {
      background-color: #ff6347;
      padding: 15px;
      text-align: center;
    }

    nav a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
    }

    /* Header */
    header {
      text-align: center;
      background-color: #fff8f6;
      padding: 40px 20px;
    }

    header h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    header p {
      font-size: 1.1rem;
      color: #666;
    }

    /* Login Page Styles */
    .login-container {
      max-width: 400px;
      margin: 40px auto;
      padding: 30px;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      text-align: center;
    }

    .login-container h2 {
      font-size: 1.8rem;
      margin-bottom: 20px;
      color: #ff6347;
    }

    .login-container form {
      display: flex;
      flex-direction: column;
    }

    .login-container label {
      font-size: 1.1rem;
      margin-bottom: 8px;
      text-align: left;
    }

    .login-container input {
      padding: 12px;
      margin-bottom: 20px;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 5px;
      outline: none;
    }

    .login-container input:focus {
      border-color: #ff6347;
    }

    .login-container button {
      padding: 12px;
      font-size: 1.1rem;
      background-color: #ff6347;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .login-container button:hover {
      background-color: #e5533b;
    }

    .login-container .signup-link {
      margin-top: 20px;
    }

    .login-container .signup-link a {
      color: #ff6347;
      text-decoration: none;
    }

    .login-container .signup-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <nav>
    <a href="#">Home</a>
    <a href="#">About Us</a>
    <a href="#">Contact</a>
    <a href="#">Order Now</a>
  </nav>

  <header>
    <h1>Login to FoodExpress</h1>
    <p>Enter your credentials to access your account</p>
  </header>

  <div class="login-container">
    <form action="login_process.php" method="POST">
      <h2>Login</h2>

      <label for="username">Username or Email</label>
      <input type="text" id="username" name="username" required placeholder="Enter username or email">

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required placeholder="Enter your password">

      <button type="submit" class="login-btn">Login</button>
    </form>
    <p class="signup-link">Don't have an account? <a href="signup.php">Sign up here</a></p>
  </div>

  <script>
    // Add any necessary JS here, for example, handling form submission or validation
  </script>
</body>
</html>
