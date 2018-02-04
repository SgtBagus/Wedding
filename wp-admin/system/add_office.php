<?php
include '../system/connect.php';

if (isset($_POST['input'])) {

  $office_name           = $_POST['office_name'];
  $office_code           = $_POST['office_code'];
  $desk                  = $_POST['desk'];

  $cekdulu= "SELECT * FROM office WHERE Office_name='$office_name'";
  $prosescek= mysqli_query($con, $cekdulu);
  if (mysqli_num_rows($prosescek)>0) {
    header("location:../add_office?action=duplicate");
  }
  else {
    $query = "INSERT INTO office SET Office_name='$office_name', Office_code='$office_code',
              Description='$desk'";
    $result = mysqli_query($con, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($con).
             " - ".mysqli_error($con));
    }
    else {
        header("location:../office?action=add");
    }
  }
}else{
  header("location:../404");
}
?>
