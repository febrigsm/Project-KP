<?php
include "../koneksi.php";
$no=$_POST['no2'];
$noDisposisi=$_POST['noDisposisi2'];
$jenis=$_POST['jenis2'];
$Kirimdisposisi=$_POST['Kirimdisposisi2'];
$Terimadisposisi=$_POST['Terimadisposisi2'];
$noAgenda=$_POST['noAgenda2'];
$disposisi=$_POST['disposisi2'];
$tujuan = $_POST['tujuan2'];
$selected_3 = "";
foreach ($tujuan as $tujuan2){
  $selected_3 = "$selected_3"."$tujuan2".',';
}

$klasifikasi = $_POST['klasifikasi2'];
$selected_4 = "";
foreach ($klasifikasi as $klasifikasi2){
  $selected_4 = "$selected_4"."$klasifikasi2".',';
}

$input2="INSERT INTO disposisisekda(NO,NO_DISPOSISI1,JENIS_DISPOSISI1,KIRIM_DISPOSISI1,TERIMA_DISPOSISI1,NO_AGENDA1,TUJUAN_DISPOSISI1, KLASIFIKASI_DISPOSISI1, DISPOSISI1) 
VALUES ('$no','$noDisposisi','$jenis','$Kirimdisposisi','$Terimadisposisi','$noAgenda','$selected_3','$selected_4','$disposisi')";

if(!mysql_query($input2)){
	die ('tidak ada query'.mysql_error());
}else{
	header("location:viewSM.php?id=$no");
}
?>