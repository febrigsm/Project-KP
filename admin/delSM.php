<?php  
  
include ('../koneksi.php');
include 'config.php';       
$id=$_GET['id'];

$sql = mysql_query("select file from suratmasuk where NO='$id'")or die(mysql_error());
$data = mysql_fetch_row($sql);
$file = $data[0];
if(!unlink($file)){
  echo "Error deleting file!";
}else{
  mysql_query("delete from suratmasuk where NO='$id'")or die(mysql_error());
  header("location:ListSM.php");
}
               
?>  