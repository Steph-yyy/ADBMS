<!DOCTYPE html>
<html>
<head>
  <title>User Signup</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

    .container {
      display: flex;
      height: 100vh;
    }

    .left-side {
      flex: 1;
      background-color: #0000FF;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      padding: 40px;
    }

    .left-side h1 {
      font-size: 40px;
      margin-bottom: 10px;
    }

    .left-side p {
      font-size: 18px;
      max-width: 300px;
      text-align: center;
    }

    .right-side {
      flex: 1;
      background-color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .form-container {
      width: 100%;
      max-width: 400px;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #0000FF;
    }

    .form-container input {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-container button {
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      background-color: #0000FF;
      color: white;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }

    .form-container button:hover {
      background-color: #0033cc;
    }

    .error-message {
      color: red;
      font-size: 14px;
      text-align: center;
      margin-top: 10px;
    }

    .success-message {
      color: green;
      font-size: 14px;
      text-align: center;
      margin-top: 10px;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      .left-side, .right-side {
        flex: none;
        width: 100%;
        height: auto;
      }

      .left-side {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <div class="left-side">
    <h1>Welcome!</h1>
    <p>Join the Resident Records system to manage and track your community data effectively.</p>
  </div>

  <div class="right-side">
    <div class="form-container">
      <h2>User Signup</h2>
      <form method="POST" action="signup.php">
        <label>Username</label>
        <input type="text" name="username" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" required>

        <button type="submit">Sign Up</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>
