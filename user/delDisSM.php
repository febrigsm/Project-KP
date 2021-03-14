<?php    
include ('../koneksi.php');
       
$id2=$_GET['id_dis']; 
$id_surat=$_GET['id'];      
$delete="Delete from disposisi2 Where NO_DISPOSISI='$id2'"; 
$delete2="Delete from disposisi1 Where NO_DISPOSISI1='$id2'";     
mysql_query($delete) or die ("Error tu");
mysql_query($delete2) or die ("Error tu");
header("location:viewSM.php?id=$id_surat");
           
?>  