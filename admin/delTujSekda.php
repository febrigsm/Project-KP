<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$hps = mysql_query("delete from tujuan2 where ID_TUJUAN2=$id");
	if ($hps) {
	    header("location:ListTujSekda.php");
	} else {
	    echo "Gagal menghapus, masih ada data terkait <a href=\"javascript:history.back()\">kembali</a>";
	}
?>