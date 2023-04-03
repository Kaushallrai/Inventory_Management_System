<?php
session_start(); // start session
session_unset(); // unset all session variables
session_destroy(); // destroy session
header("Location: ../html/login.php"); 
exit();
?>
