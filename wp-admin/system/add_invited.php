<?php
include '../system/connect.php';

if (isset($_POST['input'])) {

  $name                 = $_POST['name'];
  $office               = $_POST['office'];
  $username             = $_POST['username'];

  $cekdulu= "SELECT * FROM invite WHERE Invited='$name'";
  $prosescek= mysqli_query($con, $cekdulu);
  if (mysqli_num_rows($prosescek)>0) {
    header("location:../add_invited?action=duplicate");
  }
  else {
    $queryoffice = "SELECT * FROM office WHERE Office_name = '$office' ";
    $resultoffice = mysqli_query($con, $queryoffice);
    if(!$resultoffice){
    die ("Query Error: ".mysqli_errno($con).
        " - ".mysqli_error($con));
    }
    else{
      $data_office = mysqli_fetch_assoc($resultoffice);
      $id_office = $data_office["Id_office"];
        $query = "INSERT INTO invite SET Invited='$name',
                  Id_office='$id_office', Username='$username'";
      $result = mysqli_query($con, $query);
      if(!$result){
          die ("Query gagal dijalankan: ".mysqli_errno($con).
               " - ".mysqli_error($con));
      }
      else {
          header("location:../index?action=add");
      }
    }
  }
}else{
  header("location:../404");
}
?>
