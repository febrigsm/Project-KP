<?php
include "../koneksi.php";
include('config.php');
$id='';
if($_POST['upload']){
  $noSM=$_POST['nomorSM_isi'];
  $tglSM=$_POST['tglSM_isi'];
  $sifat=$_POST['SifatSM_isi'];
  $pengirim=$_POST['dariSM_isi'];
  $kepada=$_POST['tujuanSM_isi'];
  $perihal=$_POST['perihalSM_isi'];
  $allowed_ext  = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip','jpg','png');
  $file_name    = $_FILES['file']['name'];
  $file_ext   = strtolower(end(explode('.', $file_name)));
  $file_size    = $_FILES['file']['size'];
  $file_tmp   = $_FILES['file']['tmp_name'];
  $nama     = $_POST['nama'];
  $tgl      = date("Y-m-d");
        
  if(in_array($file_ext, $allowed_ext) === true){
    if($file_size <  104857600){
      $lokasi = '../files/'.$nama.'.'.$file_ext;
      if(!move_uploaded_file($file_tmp, $lokasi)){
        echo '<div class="error">ERROR: Gagal Coy!</div>';
        }else{
           $in = mysql_query("INSERT INTO surat2 VALUES('','$noSM','$tglSM','$sifat','$pengirim','$kepada','$perihal','$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')") or die(mysql_error());
           $temp = mysql_query("SELECT NO FROM surat2 order by NO DESC LIMIT 1");
           $row = mysql_fetch_array($temp);
           $id = $row['NO'];
           echo "JHVFGJGVJGVGHVFJVGJVJHVGJHVGJ".$id;
           header("location:RegDisSM.php?id=$id");
           if($in){
              $id=mysql_insert_id();
              echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
            }else{
              echo '<div class="error">ERROR: Gagal upload file!</div>';
            }
          }
          }else{
            echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
          }
        }else{
          echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
        }
      }
      //header("location:RegDisSM.php?id=$id");
?>