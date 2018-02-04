<?php
session_start();
include '../system/koneksi.php';
$username=$_POST['username'];
$password=md5($_POST['password']);

$op=$_GET['op'];
if($op=="in"){
	$sql=mysqli_query( $con, "SELECT * FROM admin WHERE Username_admin='$username'
					   AND Password_admin = '$password'");
	if(mysqli_num_rows($sql)==1){
		$qry = mysqli_fetch_array($sql);
		$_SESSION['Id_admin'] = $qry['Id_admin'];
			header("location:../index");
	}
	else{
	    echo "<script type='text/javascript'>document.location='../login?alert=error ';</script>";
	}
}
?>
