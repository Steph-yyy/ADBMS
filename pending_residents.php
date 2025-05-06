<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "resident_records"; // Use your DB name

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['resident_id'], $_POST['action'])) {
    $resident_id = $_POST['resident_id'];

    if ($_POST['action'] === 'approve') {
        $getResident = $conn->query("SELECT * FROM pending_residents WHERE id = $resident_id");
        if ($getResident && $getResident->num_rows > 0) {
            $resident = $getResident->fetch_assoc();
            $stmt = $conn->prepare("INSERT INTO approved_residents (firstname, lastname, birthday, address) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $resident['firstname'], $resident['lastname'], $resident['birthday'], $resident['address']);
            $stmt->execute();

            // Delete from pending
            $conn->query("DELETE FROM pending_residents WHERE id = $resident_id");
        }

    } elseif ($_POST['action'] === 'reject') {
        // Just delete the resident from pending_residents
        $conn->query("DELETE FROM pending_residents WHERE id = $resident_id");
    }
}

// Fetch all pending residents
$result = $conn->query("SELECT * FROM pending_residents");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pending Entries - Resident Records</title>
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
        .approve {
            background-color: green;
            color: white;
        }
        .reject {
            background-color: red;
            color: white;
        }
        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="blue-box">
    <h2>Pending Resident Registrations</h2>

    <table>
        <tr>
            <th>Full Name</th>
            <th>Date of Birth</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['firstname'] . ' ' . $row['lastname']) ?></td>
                <td><?= htmlspecialchars($row['birthday']) ?></td>
                <td><?= htmlspecialchars($row['address']) ?></td>
                <td>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="resident_id" value="<?= $row['id'] ?>">
                        <button type="submit" name="action" value="approve" class="btn approve">Approve</button>
                    </form>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="resident_id" value="<?= $row['id'] ?>">
                        <button type="submit" name="action" value="reject" class="btn reject">Reject</button>
                    </form>
                </td>
            </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="4">No pending residents found.</td></tr>
        <?php endif; ?>
    </table>
</div>

</body>
</html>
