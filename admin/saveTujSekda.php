<?php
	include "../koneksi.php";
	$nama_bppka = $_POST['nama_bppka'];
	$status_klasbppka= $_POST['status_klasbppka'];
	
	$query = "insert into tujuan2 values('','$nama_bppka','$status_klasbppka')";
	@$input = mysql_query($query);

	if ($input) {
    	header("location:ListTujSekda.php");
	} else {
    	echo "gagal";
	}
?>