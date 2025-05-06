<!DOCTYPE html>
<html>
<head>
    <title>Resident Registration</title>
    <style>
        body {
            background-color: #eef2f5;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .blue-box {
            background-color: #ffffff;
            border-left: 10px solid #0000FF;
            padding: 30px;
            margin: 30px auto;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #0000FF;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .gender-group {
            display: flex;
            gap: 15px;
            margin-top: 5px;
        }

        .gender-group label {
            font-weight: normal;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #0000FF;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0033cc;
        }
    </style>
</head>
<body>

<div class="blue-box">
    <form action="register.php" method="post">
        <h1>Resident Registration</h1>
        <p style="text-align:center;">Fill out the form with accurate information.</p>

        <label for="firstname">First Name</label>
        <input type="text" name="firstname" required>

        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" required>

        <label for="address">Address</label>
        <input type="text" name="address" required>

        <label for="birthday">Birthday</label>
        <input type="date" name="birthday" required>

        <label>Gender</label>
        <div class="gender-group">
            <label><input type="radio" name="gender" value="Male" required> Male</label>
            <label><input type="radio" name="gender" value="Female" required> Female</label>
            <label><input type="radio" name="gender" value="Other" required> Other</label>
        </div>

        <label for="barangay">Select Barangay</label>
        <select name="barangay" required>
            <option value="">-- Select Barangay --</option>
            <option value="Barangay Trapiche">Trapiche</option>
            <option value="Barangay Banadero">Banadero</option>
            <option value="Barangay Ambulong">Ambulong</option>
            <option value="Barangay San Pedro">San Pedro</option>
        </select>

        <button type="submit">Register</button>
    </form>
</div>

</body>
</html>
