<?php
// Establish a connection to the database
$conn = mysqli_connect("localhost", "myadmin", "myadmin", "inventory_management_system");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch the bill list from the "bills" table
$sql = "SELECT id, bill_id, date, customer, total_price FROM bills";
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo '<div class="bill-item" onclick="showBill(' . $row['id'] . ')">';
    echo '<span>' . $row['id'] . '.</span>';
    echo '<span>Bill No:</span> ' . $row['bill_id'] . ' ';
    echo '<span>Date:</span> ' . $row['date'] . ' ';
    echo '<span>Customer:</span> ' . $row['customer'] . ' ';
    echo '<span>Total:</span> $' . $row['total_price'];
    echo '</div>';
  }

} else {
  echo "No results found.";
}

// Close the database connection
$conn->close();
?>
