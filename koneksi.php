<?php
	$host="localhost";
	$user="root";
    $password="";    
    $koneksi=mysql_connect($host,$user,$password) or 
    die("Gagal terhubung ke database");
    mysql_select_db("surat2");

?>