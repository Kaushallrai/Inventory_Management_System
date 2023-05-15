<?php
    require_once("connect.php");

    if (isset($_POST['submit'])) {
        if(empty($_POST["order_id"]) || empty($_POST["product_id"]) || empty($_POST["product_name"]) || empty($_POST["date"]) || empty($_POST["customer"]) || empty($_POST["destination"]) || empty($_POST["quantity"]) || empty($_POST["total_price"]) || empty($_POST["status"])){
            echo 'Please fill in all the fields.'; 
        }
        else{
            $order_id = $_POST["order_id"];
            $product_id = $_POST["product_id"];
            $product_name = $_POST["product_name"];
            $date = $_POST["date"];
            $customer = $_POST["customer"];
            $destination = $_POST["destination"];
            $quantity = $_POST["quantity"];
            $total_price = $_POST["total_price"];
            $status = $_POST["status"];

            $sql = "INSERT INTO sales (order_id, product_id, product_name, date, customer, destination, quantity, total_price, status)
                    VALUES ('$order_id', '$product_id', '$product_name', '$date', '$customer', '$destination', '$quantity', '$total_price', '$status')";
            $result = mysqli_query($conn,$sql);

          
        }
    }
?>
