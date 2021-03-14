<?php
 include '../sesi.php';
 include '../up.php';
?>
  
<li><i class="icon_document_alt"></i><a href="ListKlasBppka.php">List Klasifikasi Bppka</a></li>					  	
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">Form Register Klasifikasi Bppka</header>
<div class="panel-body">
  <form class="form-horizontal " method="post" action="saveKlasBppka.php">
    <div class="form-group">
    <label class="col-sm-2 control-label">Nama</label>
      <div class="col-sm-10">
      <input type="text" name="nama_bppka" class="form-control" placeholder="nama">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Status</label>
      <div class="col-sm-10">
      <input type="radio" name="status_klasbppka" value="AKTIF" checked>AKTIF
      </br></br>
      <input type="radio" name="status_klasbppka" value="TIDAK AKTIF">TIDAK AKTIF
      </div>
      </div>
      
      <div class="form-group">
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <input type="submit" name="upload" value="Simpan" class="btn btn-default" /></td>
        <input type="reset" class="btn btn-default">
        <a href="ListKlasBppka.php" class="btn btn-default">Batal</a>
      </div>
      </div>
  </form>
<?php 
  include '../bottom.php';
?>            