<?php  
  
include ('../koneksi.php');
include 'config.php';       
$id=$_GET['id'];
$delete1="Delete from disposisi2 Where NO='$id'";  
mysql_query($delete1) or die ("Error tu"); 
$delete2="Delete from disposisi1 Where NO='$id'";  
mysql_query($delete2) or die ("Error tu");         

$sql = mysql_query("select file from surat2 where NO='$id'")or die(mysql_error());
$data = mysql_fetch_row($sql);
$file = $data[0];
if(!unlink($file)){
  echo "Error deleting file!";
}else{
  mysql_query("delete from surat2 where NO='$id'")or die(mysql_error());
  header("location:ListSM.php");
}
               
?>  