<?php 
session_start();
include "../php/connect.php";

if (isset($_POST['email']) && isset($_POST['password'])){
  function validate($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
  }
  $email = validate($_POST['email']);
  $password = validate($_POST['password']);

  if(empty($email)){
    header("Location: ../html/index.php?error=Email is required");
    exit();
  }
  else if(empty($password)) {
    header("Location: ../html/index.php?error=Password is required");
    exit();
  }
  else{
    $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result=mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)===1){
      $row=mysqli_fetch_assoc($result);
      if($row['Email']===$email && $row['Password']===$password){
        $_SESSION['email']=$row['Email'];
        $_SESSION['password']=$row['Password'];
        $_SESSION['id']=$row['UserID'];
        header("Location: ../index.html");
        exit();
      }
      else{
        header("Location: ../html/index.php?error=Incorrect Email or password");
        exit();
      }
    }
    else{
      header("Location: ../html/index.php?error=Incorrect Email or password");
      exit();
    }
  }
}
else{
  header("Location: ../html/index.php");
  exit();
}
?>
