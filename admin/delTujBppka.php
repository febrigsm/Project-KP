<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$hps = mysql_query("delete from tujuan where ID_TUJUAN=$id");
	if ($hps) {
	    header("location:ListTujBppka.php");
	} else {
	    echo "Gagal menghapus, masih ada data terkait <a href=\"javascript:history.back()\">kembali</a>";
	}
?>