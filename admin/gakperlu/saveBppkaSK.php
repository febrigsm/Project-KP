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

$input2="INSERT INTO dispokeluar(NOK,NO_DISPOSISIK,KIRIM_DISPOSISIK,TERIMA_DISPOSISIK,NO_AGENDAK,PENGIRIM_DISPOSISIK, TUJUAN_DISPOSISIK, KLASIFIKASI_DISPOSISIK,DISPOSISIK) 
VALUES ('$no','$noDisposisi','$Kirimdisposisi','$Terimadisposisi','$noAgenda','$pengirimDisposisi','$selected_2','$selected_1','$disposisi')";

if(!mysql_query($input2)){
  die ('tidak ada query'.mysql_error());
}else{
  header("location:viewSK.php?id=$no");
}
?>