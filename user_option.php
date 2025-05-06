<!DOCTYPE html>
<html>
<head>
  <title>Resident Records System</title>
  <style>
    body {
      background-color: #f0f0f0;
      font-family: Arial, sans-serif;
    }

    .top-blue-box {
      background-color: #0000FF;
      color: white;
      height: 60px; /* Changed to a proper height */
      padding: 15px 30px;
      text-align: center;
      font-size: 30px;
      font-weight: bold;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .container {
      text-align: center;
      padding: 60px 20px;
    }

    .card-container {
      display: flex;
      justify-content: center;
      gap: 40px;
      margin-top: 40px;
    }

    .card {
      background-color: #ffffff;
      padding: 30px;
      width: 300px;
      text-decoration: none;
      border: 2px solid #0000FF;
      border-radius: 10px;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
      color: #0000FF;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .login-form {
      display: flex;
      flex-direction: column;
      margin: 20px auto;
      max-width: 300px;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    }

    .form-input {
      margin-bottom: 15px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .button {
      padding: 10px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .button:hover {
      background-color: #0056b3;
    }

    .signup-link {
      text-align: center;
      margin-top: 10px;
    }

    .signup-link a {
      color: #007BFF;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="top-blue-box"> 
    Welcome to the Resident Records System
  </div>

  <div class="container">
    <div class="login-form">
      <input type="text" class="form-input" placeholder="Phone, email or username">
      <input type="password" class="form-input" placeholder="Password">
      <button class="button">Log In</button>
      <div class="signup-link">
        <p>Don't have an account? <a href="Signup.php">Sign Up</a></p>
      </div>
    </div>
  </div>

</body>
</html>