<!DOCTYPE html>
<html>
<head>
    <title>Dependents Management</title>
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
            padding: 20px;
            margin: 20px auto;
            width: 90%;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #0000FF;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }

        th {
            background-color: #0000FF;
            color: white;
        }

        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-danger {
            background-color: #FF5733;
            color: white;
        }

        .btn-edit {
            background-color: #FFC107;
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"], input[type="date"], select {
            padding: 8px;
            margin: 10px 0;
            width: 100%;
            max-width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<div class="blue-box">
    <h2>Manage Dependents</h2>

    <form method="POST">
        <h3>Add New Dependent</h3>
        <label for="resident_id">Resident ID:</label>
        <input type="text" name="resident_id" required><br>

        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required><br>

        <label for="relationship">Relationship:</label>
        <input type="text" name="relationship" required><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" required><br>

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br>

        <label for="status">Status:</label>
        <select name="status" required>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select><br><br>

        <button type="submit" name="add_dependent" class="btn">Add Dependent</button>
    </form>

    <h3>Existing Dependents</h3>
    <table>
        <tr>
            <th>Resident ID</th>
            <th>Full Name</th>
            <th>Relationship</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>12345</td>
            <td>Juan Dela Cruz</td>
            <td>Child</td>
            <td>2010-05-15</td>
            <td>Male</td>
            <td>Active</td>
            <td>
                <form method="POST" style="display:inline;">
                    <button type="submit" name="edit_dependent" class="btn btn-edit">Edit</button>
                </form>
                <form method="GET" style="display:inline;">
                    <button type="submit" name="delete_id" value="12345" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <tr>
            <td>67890</td>
            <td>Maria Santos</td>
            <td>Spouse</td>
            <td>1985-12-22</td>
            <td>Female</td>
            <td>Active</td>
            <td>
                <form method="POST" style="display:inline;">
                    <button type="submit" name="edit_dependent" class="btn btn-edit">Edit</button>
                </form>
                <form method="GET" style="display:inline;">
                    <button type="submit" name="delete_id" value="67890" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    </table>
</div>

</body>
</html>
