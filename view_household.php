<!DOCTYPE html>
<html>
<head>
    <title>View Households</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f5;
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

        .btn-view {
            background-color: #007BFF;
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="blue-box">
    <h2>Households Information</h2>

    <table>
        <tr>
            <th>Household ID</th>
            <th>Address</th>
            <th>Head of Household</th>
            <th>Members</th>
            <th>Actions</th>
        </tr>
                <form method="POST" style="display:inline;">
                    <button type="submit" name="view_household" value="<?php echo $household['household_id']; ?>" class="btn btn-view">View Details</button>
                </form>
            </td>
        </tr>
    </table>
</div>

</body>
</html>
