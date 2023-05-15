<?php 
session_start();
include "../db/connect.php";

if (isset($_POST['email']) && isset($_POST['password'])){
  function validate($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
  }
  $email = validate($_POST['email']);
  $password = validate($_POST['password']);
if(empty($email) && empty($password)) {
    header("Location: ../php/index.php?error=Email and Password is required");
    exit();}
  else if(empty($email)){
    header("Location: ../php/index.php?error=Email is required");
    exit();
  }
  else if(empty($password)) {
    header("Location: ../php/index.php?error=Password is required");
    exit();
  }
  else{
    $stmt = $conn->prepare("SELECT * FROM validate WHERE email=? AND password=?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1){
      $row = $result->fetch_assoc();
      if($row['email']===$email && $row['password']===$password){
        $_SESSION['email']=$row['email'];
        $_SESSION['password']=$row['password'];
        $_SESSION['id']=$row['UserID'];
        sleep(2);
        header("Location: ../index.html");
        exit();
      }
      else{
        header("Location: ../php/index.php?error=Incorrect Email or password");
        exit();
      }
    }
    else{
      header("Location: ../php/index.php?error=Incorrect Email or password");
      exit();
    }
  }
}
else{
  header("Location: ../php/index.php");
  exit();
}
?>
