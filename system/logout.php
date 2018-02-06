<?php
session_start();
include '../wp-admin/system/koneksi.php';
unset($_SESSION['Id_invit']);
session_unset(); 
session_destroy();
		echo '<script>document.location.href="../index";</script>'
?>
