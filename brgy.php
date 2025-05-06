<!DOCTYPE html>
<html>
<head>
    <title>Manage Barangays</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f5;
            padding: 20px;
        }

        .container {
            background: white;
            border-left: 10px solid #007bff;
            padding: 20px;
            border-radius: 10px;
            max-width: 700px;
            margin: auto;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background: #007bff;
            color: white;
        }

        input[type="text"] {
            padding: 8px;
            width: 60%;
            margin-right: 10px;
        }

        .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }

        .add { background-color: #007bff; }
        .edit { background-color: #28a745; }
        .delete { background-color: #dc3545; }
    </style>
</head>
<body>

<div class="container">
    <h2>Manage Barangays</h2>

    <form method="POST">
        <input type="text" name="barangay_name" placeholder="Enter barangay name" required>
        <button type="submit" name="add" class="btn add">Add</button>
    </form>

    <table>
        <tr>
            <th>Barangay Name</th>
            <th>Actions</th>
        </tr>
        <tr>
            <form method="POST">
                <td>
                    <input type="text" name="barangay_name" value="<?= htmlspecialchars($row['name']) ?>" required>
                    <input type="hidden" name="barangay_id" value="<?= $row['id'] ?>">
                </td>
                <td>
                    <button type="submit" name="edit" class="btn edit">Edit</button>
                    <button type="submit" name="delete" class="btn delete" onclick="return confirm('Delete this barangay?')">Delete</button>
                </td>
            </form>
        </tr>
    </table>
</div>

</body>
</html>