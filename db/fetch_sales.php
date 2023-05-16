<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "inventory_management_system");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch data from database
$sql = "SELECT * FROM sales";
$result = $conn->query($sql);

// Display data in HTML table format
if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr>";
  echo "<th>Order ID</th>";
  echo "<th>Product ID</th>";
  echo "<th>Product Name</th>";
  echo "<th>Date</th>";
  echo "<th>Customer</th>";
  echo "<th>Destination</th>";
  echo "<th>Quantity</th>";
  echo "<th>Total Price</th>";
  echo "<th>Status</th>";
  echo "</tr>";

  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['order_id'] . "</td>";
    echo "<td>" . $row['product_id'] . "</td>";
    echo "<td>" . $row['product_name'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['customer'] . "</td>";
    echo "<td>" . $row['destination'] . "</td>";
    echo "<td>" . $row['quantity'] . "</td>";
    echo "<td>" . $row['total_price'] . "</td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "</tr>";
  }

  echo "</table>";
} else {
  echo "0 results";
}

// Close connection
$conn->close();
?>
