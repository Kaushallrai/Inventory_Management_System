<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "inventory_management_system");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch inventory data
$sql = "SELECT inventory_id, inventory_name, location, total_items FROM inventory";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
              <th>Inventory ID</th>
              <th>Inventory Name</th>
              <th>Location</th>
              <th>Total Items</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["inventory_id"] . "</td>
                <td>" . $row["inventory_name"] . "</td>
                <td>" . $row["location"] . "</td>
                <td>" . $row["total_items"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
