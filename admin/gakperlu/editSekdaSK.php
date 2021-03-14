<?php
include "../koneksi.php";
$no=$_POST['no2'];
$noDisposisi=$_POST['noDisposisi2'];
$Kirimdisposisi=$_POST['Kirimdisposisi2'];
$Terimadisposisi=$_POST['Terimadisposisi2'];
$noAgenda=$_POST['noAgenda2'];
$pengirimDisposisi=$_POST['pengirimDisposisi2'];

$tujuan1 = $_POST['tujuan2'];
$selected_2 = "";
foreach ($tujuan1 as $tujuan2){
  $selected_2 = "$selected_2"."$tujuan2".',';
}

$klasifikasi1 = $_POST['klasifikasi2'];
$selected_1 = "";
foreach ($klasifikasi1 as $klasifikasi2){
  $selected_1 = "$selected_1"."$klasifikasi2".',';
}
$disposisi=$_POST['disposisi2'];

mysql_query ("update dispokeluar2 set NOK='$no',KIRIM_DISPOSISIK2='$Kirimdisposisi',TERIMA_DISPOSISIK2='$Terimadisposisi',NO_AGENDAK2='$noAgenda',PENGIRIM_DISPOSISIK2='$pengirimDisposisi', TUJUAN_DISPOSISIK2='$selected_2',KLASIFIKASI_DISPOSISIK2='$selected_1',DISPOSISIK2='$disposisi' where NO_DISPOSISIK2='$noDisposisi'");

header("location:viewSK.php?id=$no");
?>


