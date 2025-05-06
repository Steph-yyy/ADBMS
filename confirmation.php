<?php
session_start();

if (!isset($_SESSION['firstname'])) {
    header("Location: register.php");
    exit();
}

$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$address = $_SESSION['address'];
$birthday = $_SESSION['birthday'];
$gender = $_SESSION['gender'];
$barangay = $_SESSION['barangay'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Confirmation</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .confirmation-box {
            background-color: #ffffff;
            padding: 40px;
            width: 100%;
            max-width: 600px;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.6s ease;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
        }
        .info {
            font-size: 18px;
            margin: 12px 0;
            color: #34495e;
        }
        .info b {
            color: #000;
        }
        .back-link {
            display: block;
            margin-top: 30px;
            text-align: center;
            text-decoration: none;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .back-link:hover {
            background-color: #2980b9;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="confirmation-box">
        <h2>✅ Registration Confirmation</h2>
        <p class="info"><b>First Name:</b> <?php echo htmlspecialchars($firstname); ?></p>
        <p class="info"><b>Last Name:</b> <?php echo htmlspecialchars($lastname); ?></p>
        <p class="info"><b>Address:</b> <?php echo htmlspecialchars($address); ?></p>
        <p class="info"><b>Birthday:</b> <?php echo htmlspecialchars($birthday); ?></p>
        <p class="info"><b>Gender:</b> <?php echo htmlspecialchars($gender); ?></p>
        <p class="info"><b>Barangay:</b> <?php echo htmlspecialchars($barangay); ?></p>
        <a href="register.php" class="back-link">🔙 Back to Registration</a>
        <a href="option.php" class="back-link">🔙 Cancel</a>
    </div>
</body>
</html>
