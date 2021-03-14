<?php
include "../koneksi.php";
$no=$_POST['no2'];
$noDisposisi=$_POST['noDisposisi2'];
$jenis=$_POST['jenis2'];
$Kirimdisposisi=$_POST['Kirimdisposisi2'];
$Terimadisposisi=$_POST['Terimadisposisi2'];
$noAgenda=$_POST['noAgenda2'];
$pengirimDisposisi=$_POST['pengirimDisposisi2'];
$disposisi=$_POST['disposisi2'];

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

mysql_query ("update disposisi1 set NO='$no',JENIS_DISPOSISI1='$jenis',KIRIM_DISPOSISI1='$Kirimdisposisi',TERIMA_DISPOSISI1='$Terimadisposisi',NO_AGENDA1='$noAgenda',PENGIRIM_DISPOSISI1='$pengirimDisposisi', TUJUAN_DISPOSISI1='$selected_2',KLASIFIKASI_DISPOSISI1='$selected_1',DISPOSISI1='$disposisi' where NO_DISPOSISI1='$noDisposisi'");

header("location:viewSM.php?id=$no");
?>


