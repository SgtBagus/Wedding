<?php
include '../../system/koneksi.php';

if (isset($_POST['input'])) {

  $id_office            = $_POST['id_office'];
  $office_name           = $_POST['office_name'];
  $office_code           = $_POST['office_code'];
  $desk                 = $_POST['desk'];
    $query = "UPDATE office SET Office_name='$office_name', Office_code='$office_code',
            Description='$desk' WHERE Id_office ='$id_office'";
    $result = mysqli_query($con, $query);
    if(!$result){
        header("location:../edit_office?id_office=$id_office&action=error");
    }
    else {
        header("location:../office?action=edit");
    }
}else{
  header("location:../404");
}
?>
