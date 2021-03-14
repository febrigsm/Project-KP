<?php
include "../koneksi.php";
$no=$_POST['no'];
$jenis=$_POST['jenis'];
$noDisposisi=$_POST['noDisposisi'];
$Kirimdisposisi=$_POST['Kirimdisposisi'];
$Terimadisposisi=$_POST['Terimadisposisi'];
$noAgenda=$_POST['noAgenda'];

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

$input2="INSERT INTO disposisibppka(NO,NO_DISPOSISI,JENIS_DISPOSISI,KIRIM_DISPOSISI,TERIMA_DISPOSISI,NO_AGENDA,TUJUAN_DISPOSISI,KLASIFIKASI_DISPOSISI,DISPOSISI) 
VALUES ('$no','$noDisposisi','$jenis','$Kirimdisposisi','$Terimadisposisi','$noAgenda','$selected_2','$selected_1','$disposisi')";


if(!mysql_query($input2)){
	die ('tidak ada query'.mysql_error());
}else{
	header("location:viewSM.php?id=$no");
}
?>