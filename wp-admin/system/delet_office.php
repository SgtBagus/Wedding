<?php
include '../system/connect.php';
  if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM office WHERE Id_office='$id'";
    $hasil_query = mysqli_query($con, $query);

      if(!$hasil_query) {
        header("location:../office?action=error");
      }
      else{
        header("location:../office?action=deleted");
      }
  }else{
    header("location:../404");
  }
?>
