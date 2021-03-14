<?php
	include "../koneksi.php";
	$id_user = $_GET['id'];
	$nama_bppka = $_POST['nama_bppka'];
	$status_klasbppka = $_POST['status_klasbppka'];
	$query = "update tujuan set NAMA_TUJUAN='$nama_bppka', STATUS_TUJUAN='$status_klasbppka' where ID_TUJUAN='$id_user'";
	@$input = mysql_query($query);

	if ($input) {
    	header("location:ListTujBppka.php");
	} else {
    	echo "gagal";
	}
?>