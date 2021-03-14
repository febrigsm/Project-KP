<?php
	session_start();
	include 'koneksi.php';
	
	$USERNAME = $_POST['USERNAME'];
	$PASSWORD = $_POST['PASSWORD'];
	$op = $_GET['op'];
	
	if($op=="in"){
	    $cek = mysql_query("SELECT * FROM login WHERE USERNAME='$USERNAME' AND PASSWORD='$PASSWORD'");
	    if(mysql_num_rows($cek)==1){
	        $c = mysql_fetch_array($cek);
	        $_SESSION['USERNAME'] = $c['USERNAME'];
	        $_SESSION['LEVEL'] = $c['LEVEL'];
	        if($c['LEVEL']=="admin"){
	            header("location:./admin/index.php");
	        }
	    }else{
	         die("PASSWORD salah <a href=\"javascript:history.back()\">kembali</a>");
	    }
	}else if($op=="out"){
	    unset($_SESSION['USERNAME']);
	    unset($_SESSION['LEVEL']);
	    header("location:index.php");
	}
?>