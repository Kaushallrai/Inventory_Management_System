<?php
  $conn = mysqli_connect("localhost", "myadmin", "myadmin", "inventory_management_system");

// check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// fetch data from database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// display data in HTML table format
if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr>";
  echo "<th>User</th>";
  echo "<th>User Name</th>";
  echo "<th>Email Address</th>";
  echo "<th>Phone Number</th>";
  echo "<th>Address</th>";
  echo "<th>Role</th>";
  echo "</tr>";

  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['photo'] . "</td>";
    echo "<td>" . $row['user_name'] . "</td>";
    echo "<td>" . $row['email_address'] . "</td>";
    echo "<td>" . $row['phone_number'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['user_role'] . "</td>";
    echo "</tr>";
  }

  echo "</table>";
} else {
  echo "0 results";
}

// close connection
$conn->close();
?>
