<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$hps = mysql_query("delete from login where ID_USER=$id");
	if ($hps) {
	    header("location:ListUser.php");
	} else {
	    echo "Gagal menghapus, masih ada data terkait <a href=\"javascript:history.back()\">kembali</a>";
	}
?>