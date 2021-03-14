<?php
	include "../koneksi.php";
	$nama_user = $_POST['nama_user'];
	$jk_user = $_POST['jk_user'];
	$level = $_POST['level'];
	$email_user = $_POST['email_user'];
	$hp_user = $_POST['hp_user'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "insert into login values('','$nama_user','$username','$password','$level','$jk_user','$email_user','$hp_user')";
	@$input = mysql_query($query);

	if ($input) {
    	header("location:ListUser.php");
	} else {
    	echo "gagal";
	}
?>