<?php
session_start();
include '../../system/koneksi.php';
unset($_SESSION['Id_admin']);
session_unset();
session_destroy();
		echo '<script>document.location.href="../login";</script>'
?>
