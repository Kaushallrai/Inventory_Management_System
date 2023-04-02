<?php
$email = $_POST['email'];
$password = $_POST['password'];
$login_status = "";

//Database connection
$con = mysqli_connect("localhost", "myadmin", "myadmin", "inventory_management_system");
if ($con->connect_error) {
  die('Connection Failed : ' . $con->connect_error);
} else {
  $stmt = $con->prepare("select * from users where email=?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt_result = $stmt->get_result();
  if ($stmt_result->num_rows > 0) {
    $data = $stmt_result->fetch_assoc();
    if ($data['Password'] === $password) {
      $login_status = "success";
    } else {
      $login_status = "fail";
    }
  } else {
    $login_status = "fail";
  }
}

if ($login_status == "success") {
  // Redirect to home page or show success message
  header("Location: ../index.html");
  exit();
} else {
header("Location: ../html/login.html");
  echo "<script>document.getElementByClassName('invalid')[0];
  style.display = 'block';
</script>";
}
?>
