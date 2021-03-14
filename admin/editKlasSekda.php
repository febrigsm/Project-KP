<?php
	include "../koneksi.php";
	$id_user = $_GET['id'];
	$nama_sekda = $_POST['nama_sekda'];
	$status_klasbppka = $_POST['status_klassekda'];
	$query = "update klasifikasi2 set NAMA_KLAS2='$nama_sekda', STATUS_KLAS='$status_klasbppka' where ID_KLAS2='$id_user'";
	@$input = mysql_query($query);

	if ($input) {
    	header("location:ListKlasSekda.php");
	} else {
    	echo "gagal";
	}
?>