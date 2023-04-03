<?php

//Database connection
$conn = mysqli_connect("localhost", "myadmin", "myadmin", "inventory_management_system");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
