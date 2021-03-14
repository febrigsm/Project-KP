<?php
  include 'sesi.php';
  include 'up.php';
?>
 
<li><i class="icon_document_alt"></i>Register Surat Keluar</li>                
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">Form Register Surat Keluar</header>
<div class="panel-body">
<form class="form-horizontal " method="post" action="saveSK.php" enctype="multipart/form-data">
  <div class="form-group">
  <label class="col-sm-2 control-label">Nomor Surat</label>
    <div class="col-sm-10">
    <input type="text" name="nomorSM_isi2" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
 <label class="col-sm-2 control-label">Tanggal Surat</label>
    <div class="col-sm-10">
    <input type="date" name="tglSM_isi2" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
 <label class="col-sm-2 control-label">Tanggal Kirim</label>
    <div class="col-sm-10">
    <input type="date" name="kirim2" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
 <label class="col-sm-2 control-label">No. Agenda</label>
    <div class="col-sm-10">
    <input type="number" name="agen2" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Sifat</label>
    <div class="col-sm-10">
    <input type="text" name="SifatSM_isi2" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Tujuan Surat</label>
    <div class="col-sm-10">
    <input type="text" name="tujuanSM_isi2" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Perihal</label>
    <div class="col-sm-10">
    <input type="text" name="perihalSM_isi2" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Keterangan</label>
    <div class="col-sm-10">
    <input type="text" name="ket_surat2" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Nama file</label>
    <div class="col-sm-10">
    <input type="text" name="nama" size="40" required /></td>
    </div>
    </div>
    <div class="form-group">
    <label class="col-sm-2 control-label">Upload file</label>
    <div class="col-sm-10">
    <input type="file" name="file" required /></td>
    </div>
    </div></div>
    </div>
    <div class="form-group">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
         <input type="submit" name="upload" value="Simpan" class="btn btn-default" /></td>
        <input type="reset" class="btn btn-default">
        <a href="ListSK.php" class="btn btn-default">Batal</a>
      </div>
    </div>
</form>

<?php
  include '../bottom.php';
?>