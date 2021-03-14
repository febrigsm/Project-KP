<?php
	include "../koneksi.php";
	$id_user = $_GET['id'];
	$nama_bppka = $_POST['nama_bppka'];
	$status_klasbppka = $_POST['status_klasbppka'];
	$query = "update tujuan2 set NAMA_TUJUAN2='$nama_bppka', STATUS_TUJUAN2='$status_klasbppka' where ID_TUJUAN2='$id_user'";
	@$input = mysql_query($query);

	if ($input) {
    	header("location:ListTujSekda.php");
	} else {
    	echo "gagal";
	}
?>