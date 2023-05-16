<?php

//Database connection
$conn = mysqli_connect("localhost", "root", "", "inventory_management_system");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected successfully";
}
?>
