<?php
include '../system/connect.php';

if (isset($_POST['input'])) {

  $id_invited            = $_POST['id_invited'];
  $name                  = $_POST['name'];
  $office                = $_POST['office'];
  $username              = $_POST['username'];

    $query = "UPDATE invite SET Invited='$name', Id_office='$office',
            Username='$username' WHERE Id_invit ='$id_invited'";
    $result = mysqli_query($con, $query);
    if(!$result){
        header("location:../edit_invited?id_invited=$id_invited&action=error");
    }
    else {
        header("location:../index?action=edit");
    }
}else{
  header("location:../404");
}
?>
