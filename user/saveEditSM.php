<?php
include "../koneksi.php";
include('config.php');

$no=$_POST['no'];
$noSurat=$_POST['nomorSM_isi'];
$tglSurat=$_POST['tglSM_isi'];
$sifat=$_POST['SifatSM_isi'];
$pengirim=$_POST['dariSM_isi'];
$tujuan=$_POST['tujuanSM_isi'];
$perihal=$_POST['perihalSM_isi'];

$nama = $_POST['nama_file'];
$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip','jpg','png');
$file_name		= $_FILES['file']['name'];
$file_ext		= strtolower(end(explode('.', $file_name)));
$file_size		= $_FILES['file']['size'];
$file_tmp		= $_FILES['file']['tmp_name'];

if(in_array($file_ext, $allowed_ext) === true){
  if($file_size < 104857600){
    $lokasi = '../files/'.$nama.'.'.$file_ext;
    if(!move_uploaded_file($file_tmp, $lokasi)){
        echo '<div class="error">ERROR: Gagal Coy!</div>';
    }else{
      $sql = mysql_query("select file from surat2 where NO='$no'")or die(mysql_error());
      $data = mysql_fetch_row($sql);
      $target = $data[0];
      $in = mysql_query("UPDATE surat2 SET NO_SURAT='$noSurat',TANGGAL_SURAT='$tglSurat',SIFAT='$sifat',PENGIRIM_SURAT='$pengirim',TUJUAN_SURAT='$tujuan',PERIHAL_SURAT='$perihal', nama_file='$nama', file='$lokasi',tipe_file='$file_ext' where NO='$no'") or die(mysql_error());
      if($in){
        echo '<div class="ok">SUCCESS: File berhasil di Update!</div>';
        if(!unlink($target)){
          echo "Error deleting file!";
        }else{
          header("location:ListSM.php");
        }
      }else{
        echo '<div class="error">ERROR: Gagal update file!</div>';
      }
    }
  }else{
    echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
  }
}else{
  echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
}
?>
