<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "inventory_management_system");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM bills";
$result = mysqli_query($conn, $query);

 echo '<h1>Bills</h1>';
// Display bill data
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="bill">';
    echo '<p>Bill ID: ' . $row['bill_id'] . '</p>';
    echo '<p>Product ID: ' . $row['product_id'] . '</p>';
    echo '<p>Product Name: ' . $row['product_name'] . '</p>';
    echo '<p>Date: ' . $row['date'] . '</p>';
    echo '<p>Customer: ' . $row['customer'] . '</p>';
    echo '<p>Destination: ' . $row['destination'] . '</p>';
    echo '<p>Quantity: ' . $row['quantity'] . '</p>';
    echo '<p>Total Price: ' . $row['total_price'] . '</p>';
    echo '<p>Status: ' . $row['status'] . '</p>';
    echo '<button onclick="printBill()">Print</button>';
    echo '</div>';}

// Close the database connection
mysqli_close($conn);
?>
