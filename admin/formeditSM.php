<?php
include '../sesi.php';
include '../up.php';
include"../koneksi.php";
$panggil=$_GET['id'];
$cari=mysql_query("select * from suratmasuk where NO='$panggil' ");
$hasil=mysql_fetch_array($cari);
?>

<li><i class="icon_document_alt"></i><a href="ListSM.php">List Surat Masuk</a></li>
<li><i class="fa fa-pencil"></i>Edit Surat Masuk</li>
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">Form Register Surat Masuk</header>
<div class="panel-body">
<form class="form-horizontal " method="post" action="saveEditSM.php" enctype="multipart/form-data">
  <div class="form-group">
  <label class="col-sm-2 control-label">Nomor</label>
    <div class="col-sm-10">
    <input type="text" name="no" value="<?php echo"$hasil[NO]";?>" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Nomor Surat</label>
    <div class="col-sm-10">
    <input type="text" name="nomorSM_isi" value="<?php echo"$hasil[NO_SURAT]";?>" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Tanggal Surat</label>
    <div class="col-sm-10">
    <input type="date" name="tglSM_isi" value="<?php echo"$hasil[TANGGAL_SURAT]";?>" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Sifat</label>
    <div class="col-sm-10">
    <input type="text" name="SifatSM_isi" value="<?php echo"$hasil[SIFAT]";?>" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Pengirim Surat</label>
    <div class="col-sm-10">
    <input type="text" name="dariSM_isi" value="<?php echo"$hasil[PENGIRIM_SURAT]";?>" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Perihal</label>
    <div class="col-sm-10">
    <input type="text" name="perihalSM_isi" value="<?php echo"$hasil[PERIHAL_SURAT]";?>" class="form-control">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">File</label>
    <div class="col-sm-10">
    <input type="file" name="file" required value="<?php echo $hasil['file'] ?>" class="form-control">
    </div>                   
    </div>
    <div class="form-group">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" value="Simpan">Lanjut</button>
      <a href="ListSM.php" class="btn btn-primary">Batal</a>
    </div>
    </div>
</form>
<?php
  include '../bottom.php';
?>