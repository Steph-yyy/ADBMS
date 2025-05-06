<?php
include 'resident_records_connect.php'; // database connection

$sql = "SELECT * FROM approved_residents";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Approved Residents</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

    .dashboard_content_container {
      padding: 30px;
    }

    .page-header {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #0000FF;
    }

    .search-bar {
      margin-bottom: 20px;
    }

    input[type="text"] {
      padding: 10px;
      width: 300px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }

    th, td {
      padding: 14px;
      text-align: left;
      border-bottom: 1px solid #eee;
    }

    th {
      background-color: #0000FF;
      color: white;
    }

    tr:hover {
      background-color: #f5f5f5;
    }

    @media (max-width: 768px) {
      input[type="text"] {
        width: 100%;
      }

      table, th, td {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>

<div class="dashboard_content_container">
  <div class="page-header">
    <i class="fa fa-users"></i> Approved Residents
  </div>
  <p>Browse and filter approved residents.</p>

  <div class="search-bar">
    <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search by name...">
  </div>

  <table id="residentsTable">
    <thead>
      <tr>
        <th>Full Name</th>
        <th>Address</th>
        <th>Birthday</th>
        <th>Gender</th>
        <th>Barangay</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= htmlspecialchars($row['firstname'] . ' ' . $row['lastname']) ?></td>
            <td><?= htmlspecialchars($row['address']) ?></td>
            <td><?= htmlspecialchars($row['birthday']) ?></td>
            <td><?= htmlspecialchars($row['gender']) ?></td>
            <td><?= htmlspecialchars($row['barangay']) ?></td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr><td colspan="5">No approved residents found.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>

<script>
function searchTable() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchInput");
  filter = input.value.toLowerCase();
  table = document.getElementById("residentsTable");
  tr = table.getElementsByTagName("tr");

  for (i = 1; i < tr.length; i++) {
    tr[i].style.display = "none";
    td = tr[i].getElementsByTagName("td");
    for (var j = 0; j < td.length; j++) {
      if (td[j]) {
        txtValue = td[j].textContent || td[j].innerText;
        if (txtValue.toLowerCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
          break;
        }
      }
    }
  }
}
</script>

</body>
</html>
