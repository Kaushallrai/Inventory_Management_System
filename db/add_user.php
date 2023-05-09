<?php
  $conn = mysqli_connect("localhost", "myadmin", "myadmin", "inventory_management_system");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  } else {
    echo "Connected successfully";
  }

  // Check if the form has been submitted
  if (!empty($_POST)) {
    // Get the form data
    $userId = $_POST['user-id'];
    $userName = $_POST['user-name'];
    $emailAddress = $_POST['email-address'];
    $phoneNumber = $_POST['phone-number'];
    $address = $_POST['address'];
    $userRole = $_POST['user-role'];

    // Get the photo data
    if (!empty($_FILES['photo']['tmp_name'])) {
      $photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
    } else {
      $photo = null;
    }

    // Connect to the database
    $conn = mysqli_connect("localhost", "myadmin", "myadmin", "inventory_management_system");

    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, "INSERT INTO users (user_id, user_name, email_address, phone_number, address, photo, user_role) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // Bind the parameters to the statement
    mysqli_stmt_bind_param($stmt, "sssssss", $userId, $userName, $emailAddress, $phoneNumber, $address, $photo, $userRole);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
       echo '<script>alert("New record created successfully");</script>';
    } else {
      echo '<script>alert("Error: ' . $stmt . '\n' . mysqli_error($conn) . '");</script>';
    }

    // Close the statement and the database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }
?>
