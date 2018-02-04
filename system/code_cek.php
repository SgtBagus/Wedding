<?php
session_start();
include "../wp-admin/system/connect.php";
$code=$_POST['code'];

$op=$_GET['op'];
if($op=="in"){
	$sql=mysqli_query( $con, "SELECT * FROM invite WHERE Username='$code'");
	if(mysqli_num_rows($sql)==1){
		$qry = mysqli_fetch_array($sql);
		$_SESSION['Id_invit'] = $qry['Id_invit'];
			header("location:../index");
	}
}else{
	// echo "<script type='text/javascript'>document.location='../kode?alert=error ';</script>";
}
?>
