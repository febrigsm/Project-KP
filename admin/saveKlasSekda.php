<?php
	include "../koneksi.php";
	$nama_sekda = $_POST['nama_sekda'];
	$status_klassekda= $_POST['status_klassekda'];
	
	$query = "insert into klasifikasi2 values('','$nama_sekda','$status_klassekda')";
	@$input = mysql_query($query);

	if ($input) {
    	header("location:ListKlasSekda.php");
	} else {
    	echo "gagal";
	}
?>