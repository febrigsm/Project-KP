<?php
include "../koneksi.php";
$no=$_POST['no'];
$noDisposisi=$_POST['noDisposisi'];
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

mysql_query ("update dispokeluar set  NOK='$no',KIRIM_DISPOSISIK='$Kirimdisposisi',TERIMA_DISPOSISIK='$Terimadisposisi',NO_AGENDAK='$noAgenda',PENGIRIM_DISPOSISIK='$pengirimDisposisi', TUJUAN_DISPOSISIK='$selected_2',KLASIFIKASI_DISPOSISIK='$selected_1',DISPOSISIK='$disposisi' where NO_DISPOSISIK='$noDisposisi'");

header("location:viewSK.php?id=$no");
?>