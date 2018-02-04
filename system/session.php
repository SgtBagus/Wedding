<?php
session_start();
$logged_in = false;
    if (empty($_SESSION['Id_invit'])) {
      echo "<script type='text/javascript'>document.location='kode';</script>";
  }
  else {
      $logged_in = true;
  }
?>
 