<?php
include "../koneksi.php";
$no=$_POST['no2'];
$noDisposisi=$_POST['noDisposisi2'];
$Kirimdisposisi=$_POST['Kirimdisposisi2'];
$Terimadisposisi=$_POST['Terimadisposisi2'];
$noAgenda=$_POST['noAgenda2'];
$pengirimDisposisi=$_POST['pengirimDisposisi2'];
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

$input2="INSERT INTO dispokeluar2(NOK,NO_DISPOSISIK2,KIRIM_DISPOSISIK2,TERIMA_DISPOSISIK2,NO_AGENDAK2,PENGIRIM_DISPOSISIK2, TUJUAN_DISPOSISIK2, KLASIFIKASI_DISPOSISIK2,DISPOSISIK2) 
VALUES ('$no','$noDisposisi','$Kirimdisposisi','$Terimadisposisi','$noAgenda','$pengirimDisposisi','$selected_3','$selected_4','$disposisi')";

if(!mysql_query($input2)){
  die ('tidak ada query'.mysql_error());
}else{
  header("location:viewSK.php?id=$no");
}
?>