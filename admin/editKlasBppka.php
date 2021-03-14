<?php
	include "../koneksi.php";
	$id_user = $_GET['id'];
	$nama_bppka = $_POST['nama_bppka'];
	$status_klasbppka = $_POST['status_klasbppka'];
	$query = "update klasifikasi set NAMA_KLAS='$nama_bppka', STATUS_KLAS='$status_klasbppka' where ID_KLAS='$id_user'";
	@$input = mysql_query($query);

	if ($input) {
    	header("location:ListKlasBppka.php");
	} else {
    	echo "gagal";
	}
?>