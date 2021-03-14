<?php
	include "../koneksi.php";
	$nama_bppka = $_POST['nama_bppka'];
	$status_klasbppka= $_POST['status_klasbppka'];
	
	$query = "insert into tujuan values('','$nama_bppka','$status_klasbppka')";
	@$input = mysql_query($query);

	if ($input) {
    	header("location:ListTujBppka.php");
	} else {
    	echo "gagal";
	}
?>