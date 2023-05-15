<?php
    require_once("connect.php");

    if (isset($_POST['submit'])) {
        if (empty($_POST["product-id"]) || empty($_POST["product-name"]) || empty($_POST["description"]) || empty($_POST["price"]) || empty($_POST["quantity"]) || empty($_POST["supplier-name"]) || empty($_POST["inventory-name"])) {
            echo 'Please fill in all the fields.'; 
        } else {
            $product_id = $_POST["product-id"];
            $product_name = $_POST["product-name"];
            $description = $_POST["description"];
            $price = $_POST["price"];
            $quantity = $_POST["quantity"];
            $supplier_name = $_POST["supplier-name"];
            $inventory_name = $_POST["inventory-name"];

            $sql = "INSERT INTO products (product_id, product_name, description, price, quantity, supplier_name, inventory_name)
                    VALUES ('$product_id', '$product_name', '$description', '$price', '$quantity', '$supplier_name', '$inventory_name')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo 'Record inserted successfully.';
            } else {
                echo 'Error inserting record: ' . mysqli_error($conn);
            }
        }
    }
?>
