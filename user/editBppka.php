<?php
include "../koneksi.php";
$no=$_POST['no'];
$noDisposisi=$_POST['noDisposisi'];
$jenis=$_POST['jenis'];
$Kirimdisposisi=$_POST['Kirimdisposisi'];
$Terimadisposisi=$_POST['Terimadisposisi'];
$noAgenda=$_POST['noAgenda'];
$pengirimDisposisi=$_POST['pengirimDisposisi'];

$tujuan1 = $_POST['tujuan'];
$selected_2 = "";
foreach ($tujuan1 as $tujuan){
  $selected_2 = "$selected_2"."$tujuan".',';
}


$klasifikasi1 = $_POST['klasifikasi'];
$selected_1 = "";
foreach ($klasifikasi1 as $klasifikasi){
  $selected_1 = "$selected_1"."$klasifikasi".',';
}

$disposisi=$_POST['disposisi'];

mysql_query ("update disposisi2 set  NO='$no',JENIS_DISPOSISI='$jenis',KIRIM_DISPOSISI='$Kirimdisposisi',TERIMA_DISPOSISI='$Terimadisposisi',NO_AGENDA='$noAgenda',PENGIRIM_DISPOSISI='$pengirimDisposisi', TUJUAN_DISPOSISI='$selected_2',KLASIFIKASI_DISPOSISI='$selected_1',DISPOSISI='$disposisi' where NO_DISPOSISI='$noDisposisi'");

header("location:viewSM.php?id=$no");
?>