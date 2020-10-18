<?php
  session_start();
  unset($_SESSION["user"]);
  unset($_SESSION["password"]);

  $_SESSION['success'] = "Log out successfully";
  header("Location: index.php");
?>
