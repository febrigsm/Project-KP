<?php
	include "../koneksi.php";
	$id_user = $_GET['id'];
	$nama_user = $_POST['nama_user'];
	$jk_user = $_POST['jk_user'];
	$level = $_POST['level'];
	$email_user = $_POST['email_user'];
	$hp_user = $_POST['hp_user'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "update login set nama_user='$nama_user', jk_user='$jk_user', level='$level', email_user='$email_user', hp_user='$hp_user', username='$username', password='$password' where id_user='$id_user'";
	@$input = mysql_query($query);

	if ($input) {
    	header("location:ListUser.php");
	} else {
    	echo "gagal";
	}
?>