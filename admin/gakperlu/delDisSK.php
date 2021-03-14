<?php   
include ('../koneksi.php');

$id2=$_GET['id_dis']; 
$id_surat=$_GET['id'];   
$delete="Delete from dispokeluar Where NO_DISPOSISIK='$id2'"; 
$delete2="Delete from dispokeluar2 Where NO_DISPOSISIK2='$id2'";     
mysql_query($delete) or die ("Error tu");
mysql_query($delete2) or die ("Error tu");
header("location:viewSK.php?id=$id_surat");
           
?>  