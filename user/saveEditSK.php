<?php
include "../koneksi.php";
include('config.php');

$kirim=$_POST['kirim'];
$noAgenda=$_POST['noAgenda'];
$keterangan=$_POST['keterangan'];
$sifat=$_POST['SifatSM_isi'];
$no=$_POST['no'];
$noSurat=$_POST['nomorSM_isi'];
$tglSurat=$_POST['tglSM_isi'];
$sifat=$_POST['SifatSM_isi'];
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
    $lokasi = '../files2/'.$nama.'.'.$file_ext;
    if(!move_uploaded_file($file_tmp, $lokasi)){
        echo '<div class="error">ERROR: Gagal Coy!</div>';
    }else{
      $sql = mysql_query("select file2 from suratkeluar where NOK='$no'")or die(mysql_error());
      $data = mysql_fetch_row($sql);
      $target = $data[0];
      $in = mysql_query("UPDATE suratkeluar SET NO_SURATK='$noSurat',TANGGAL_SURATK='$tglSurat',TANGGAL_KIRIMK='$kirim',SIFATK='$sifat',TUJUAN_SURATK='$tujuan',PERIHAL_SURATK='$perihal', NO_AGENDAK='$noAgenda',KET='$keterangan',nama_file2='$nama', file2='$lokasi',tipe_file2='$file_ext' where NOK='$no'") or die(mysql_error());
      if($in){
        echo '<div class="ok">SUCCESS: File berhasil di Update!</div>';
        if(!unlink($target)){
          echo "Error deleting file!";
        }else{
          header("location:ListSK.php");
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
