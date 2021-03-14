<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$hps = mysql_query("delete from klasifikasi2 where ID_KLAS2=$id");
	if ($hps) {
	    header("location:ListKlasSekda.php");
	} else {
	    echo "Gagal menghapus, masih ada data terkait <a href=\"javascript:history.back()\">kembali</a>";
	}
?>