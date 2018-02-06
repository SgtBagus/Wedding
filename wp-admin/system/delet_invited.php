<?php
include 'koneksi.php';
  if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM invite WHERE Id_invit='$id'";
    $hasil_query = mysqli_query($con, $query);

      if(!$hasil_query) {
        header("location:../index?action=error");
      }
      else{
        header("location:../index?action=deleted");
      }
  }else{
    header("location:../404");
  }
?>
