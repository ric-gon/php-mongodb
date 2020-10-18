<?php
  session_start();
  /*
  if (!isset($_SESSION['valid'])){
    $SESSION['success'] = "Try again";
    header("location: index.php");
  }
  */

  unset($_SESSION["user"]);
  unset($_SESSION["password"]);

  $_SESSION['success'] = "Log out successfully";
  header("Location: index.php");
?>
