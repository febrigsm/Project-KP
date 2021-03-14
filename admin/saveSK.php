<?php
include "../koneksi.php";
include('../config.php');
$id='';
if($_POST['upload']){
  $agenSK=$_POST['agen2'];
  $kirimSK=$_POST['kirim2'];
  $ketSK=$_POST['ket_surat2'];

  $noSM=$_POST['nomorSM_isi2'];
  $tglSM=$_POST['tglSM_isi2'];
  $sifat=$_POST['SifatSM_isi2'];
  $kepada=$_POST['tujuanSM_isi2'];
  $perihal=$_POST['perihalSM_isi2'];
  $allowed_ext  = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip','jpg','png');
  $file_name    = $_FILES['file']['name'];
  $file_ext   = strtolower(end(explode('.', $file_name)));
  $file_size    = $_FILES['file']['size'];
  $file_tmp   = $_FILES['file']['tmp_name'];
  $tgl      = date("Y-m-d");
        
  if(in_array($file_ext, $allowed_ext) === true){
    if($file_size < 104857600){
      $lokasi = '../files2/'.$file_name.'.';
      if(!move_uploaded_file($file_tmp, $lokasi)){
        echo '<div class="error">ERROR: Gagal Coy!</div>';
        }else{
           $in = mysql_query("INSERT INTO suratkeluar VALUES('$noSM','','$tglSM', '$kirimSK','$sifat','$kepada','$perihal', '$agenSK', '$ketSK','$tgl','$file_ext', '$file_size', '$lokasi')") or die(mysql_error());
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
      header("location:ListSK.php");
?>