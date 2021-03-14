<?php
  include '../sesi.php';
  include '../up.php';
?>

<li><i class="icon_document_alt"></i>Register Surat Masuk</li>						  	
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">Form Register Surat Masuk</header>
<div class="panel-body">
<form class="form-horizontal " method="post" action="saveSM.php" enctype="multipart/form-data">
  <div class="form-group">
  <label class="col-sm-2 control-label">Nomor Surat</label>
  <div class="col-sm-10">
    <input required="" type="text" name="nomorSM_isi" class="form-control" placeholder="">
  </div>
  </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Tanggal Surat</label>
    <div class="col-sm-10">
    <input type="date" name="tglSM_isi" class="form-control" placeholder="">
    </div>
    </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Sifat</label>
    <div class="col-sm-10">
    <input type="text" name="SifatSM_isi" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Pengirim Surat</label>
    <div class="col-sm-10">
    <input type="text" name="dariSM_isi" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Perihal</label>
    <div class="col-sm-10">
    <input type="text" name="perihalSM_isi" class="form-control" placeholder="">
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
      <a href="ListSM.php" class="btn btn-default">Batal</a>
    </div>
    </div>
</form>
<?php
  include '../bottom.php';
?>
            