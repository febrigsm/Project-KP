<?php
include 'sesi.php';
include 'up.php';
include"../koneksi.php";
$panggil=$_GET['id'];
$cari=mysql_query("select * from suratkeluar where NOK='$panggil' ");
$hasil=mysql_fetch_array($cari);
?>

<li><i class="icon_document_alt"></i><a href="ListSK.php">List Surat keluar</a></li>
<li><i class="fa fa-pencil"></i>Edit Surat Keluar</li>
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">Form Register Surat Keluar</header>
<div class="panel-body">
<form class="form-horizontal " method="post" action="saveEditSK.php" enctype="multipart/form-data">
  <div class="form-group">
  <label class="col-sm-2 control-label">Nomor</label>
    <div class="col-sm-10">
    <input type="text" name="no" value="<?php echo"$hasil[NOK]";?>" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Nomor Surat</label>
    <div class="col-sm-10">
    <input type="text" name="nomorSM_isi" value="<?php echo"$hasil[NO_SURATK]";?>" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Tanggal Surat</label>
    <div class="col-sm-10">
    <input type="date" name="kirim" value="<?php echo"$hasil[TANGGAL_SURATK]";?>" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Tanggal Kirim</label>
    <div class="col-sm-10">
    <input type="date" name="tglSM_isi" value="<?php echo"$hasil[TANGGAL_KIRIMK]";?>" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Sifat</label>
    <div class="col-sm-10">
    <input type="text" name="SifatSM_isi" value="<?php echo"$hasil[SIFATK]";?>" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Tujuan Surat</label>
    <div class="col-sm-10">
    <input type="text" name="tujuanSM_isi" value="<?php echo"$hasil[TUJUAN_SURATK]";?>" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Perihal</label>
    <div class="col-sm-10">
    <input type="text" name="perihalSM_isi" value="<?php echo"$hasil[PERIHAL_SURATK]";?>" class="form-control">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">No Agenda</label>
    <div class="col-sm-10">
    <input type="number" name="noAgenda" value="<?php echo"$hasil[NO_AGENDAK]";?>" class="form-control">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Keterangan</label>
    <div class="col-sm-10">
    <input type="text" name="keterangan" value="<?php echo"$hasil[KET]";?>" class="form-control">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Nama File</label>
    <div class="col-sm-10">
    <input type="text" name="nama_file" required value="<?php echo $hasil['nama_file2'] ?>" class="form-control">
    </div>
    </div>  
    <div class="form-group">
  <label class="col-sm-2 control-label">File</label>
    <div class="col-sm-10">
    <input type="file" name="file" required value="<?php echo $hasil['file2'] ?>" class="form-control">
    </div>                   
    </div>
    <div class="form-group">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" value="Simpan">Lanjut</button>
       <a href="ListSK.php" class="btn btn-default">Batal</a>
    </div>
    </div>
</form>
<?php
  include '../bottom.php';
?>