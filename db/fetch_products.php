<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "inventory_management_system");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch data from database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Display data in HTML table format
if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr>";
  echo "<th>Product ID</th>";
  echo "<th>Product Name</th>";
  echo "<th>Price</th>";
  echo "<th>Quantity</th>";
  echo "<th>Supplier</th>";
  echo "<th>Inventory</th>";
  echo "<th>Description</th>";
  echo "</tr>";

  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['product_id'] . "</td>";
    echo "<td>" . $row['product_name'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['quantity'] . "</td>";
    echo "<td>" . $row['supplier_name'] . "</td>";
    echo "<td>" . $row['inventory_name'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "</tr>";
  }

  echo "</table>";
} else {
  echo "0 results";
}

// Close connection
$conn->close();
?>
