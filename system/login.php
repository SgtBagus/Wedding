<?php
session_start();
include '../wp-admin/system/koneksi.php';
$kode=$_POST['kode'];

$op=$_GET['op'];
if($op=="in"){
	$sql=mysqli_query( $con, "SELECT * FROM invite WHERE Username='$kode'");
	if(mysqli_num_rows($sql)==1){
		$qry = mysqli_fetch_array($sql);
		$_SESSION['Id_invit'] = $qry['Id_invit'];
			header("location:../index");
	}
	else{
	    echo "<script type='text/javascript'>document.location='../kode';</script>";
	}
}
?>
