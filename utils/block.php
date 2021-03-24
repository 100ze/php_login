<?php
  session_start();

  if (empty($_SESSION['logado'])) {
    return header('location: /pages/login.php');
  }
?>
