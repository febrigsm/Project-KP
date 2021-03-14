<?php
include '../sesi.php';
include '../up.php';
include '../koneksi.php';
$panggil=$_GET['id'];
$cari2=mysql_query("select * from suratmasuk where NO='$panggil' ");
$hasil2=mysql_fetch_array($cari2);
?>

<li><i class="icon_document_alt"></i><a href="RegSM.php">Register Surat Masuk</a></li>
<li><i class="icon_documents_alt"></i>Register Disposisi Surat Masuk</li>
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">Form Register Disposisi</header>
<div class="panel-body">
<ul class="nav nav-tabs">
<li class="active"><a href="#BPPKA" data-toggle="tab">BPPKA</a></li>
<li class=""><a href="#Sekda" data-toggle="tab">Sekda / Bupati</a></li>
</ul><!-- Tab panes -->
<div class="tab-content">
<div class="tab-pane active" id="BPPKA">
  <form class="form form-horizontal" method="post" action="saveBppka.php">
    <div class="form-group"><br/>
    <label class="col-sm-2 control-label">Nomor</label>
      <div class="col-sm-10">
      <input type="text" name="no" value="<?php echo"$hasil2[NO]";?>" class="form-control" placeholder="">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Nomor Disposisi</label>
      <div class="col-sm-10">
      <input type="text" name="noDisposisi" class="form-control" placeholder="">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Jenis Disposisi</label>
      <div class="col-sm-10">
      <input type="text" name="jenis" class="form-control" placeholder="">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Tanggal Surat</label>
        <div class="col-sm-10">
        <input type="date" name="Kirimdisposisi" class="form-control" placeholder=""> 
        </div>
        </div>
        <div class="form-group">
      <label class="col-sm-2 control-label">Tanggal Terima</label>
        <div class="col-sm-10">
        <input type="date" name="Terimadisposisi" class="form-control" placeholder="">
        </div>
        </div>
        <div class="form-group">
      <label class="col-sm-2 control-label">No Agenda</label>
        <div class="col-sm-10">
        <input type="number" name="noAgenda" class="form-control" placeholder="">
        </div>
        </div>
        <div class="form-group">
      <label class="col-sm-2 control-label">Diteruskan</label>
        <div class="col-md-5">  
        <?php 
          $Query2=mysql_query("SELECT * FROM `tujuan`");
          $temp = 0;
          while($n=mysql_fetch_array($Query2)){
            if ($temp%2==0) {
              echo '<div class=checkbox><input type=checkbox name="tujuan[]" value='.$n['ID_TUJUAN'].'><label>'.$n['NAMA_TUJUAN'].'</label></div>';
            }
            $temp++;
          }  
        ?>   
        </div>
        <div class="col-md-5">  
        <?php 
          $Query2=mysql_query("SELECT * FROM `tujuan`");
          $temp = 0;
          while($n=mysql_fetch_array($Query2)){
            if ($temp%2==1) {
              echo '<div class=checkbox><input type=checkbox name="tujuan[]" value='.$n['ID_TUJUAN'].'><label>'.$n['NAMA_TUJUAN'].'</label></div>';
            }
            $temp++;
          }  
        ?>   
        </div>
        </div><br>
        <div class="form-group">
      <label class="col-sm-2 control-label">Klasifikasi</label>
        <div class="col-md-3">
        <?php 
          $Query=mysql_query("SELECT * FROM `klasifikasi`");
          $temp = 0;
          while($n=mysql_fetch_array($Query)){
            if ($temp%3==0) {
              echo '<div class=checkbox><input type=checkbox name="klasifikasi[]" value='.$n['ID_KLAS'].'><label>'.$n['NAMA_KLAS'].'</label></div>';
            } $temp++;
          }  
        ?> 
        </div>
        <div class="col-md-3">
        <?php 
          $Query=mysql_query("SELECT * FROM `klasifikasi`");
          $temp = 0;
          while($n=mysql_fetch_array($Query)){
            if ($temp%3==1) {
              echo '<div class=checkbox><input type=checkbox name="klasifikasi[]" value='.$n['ID_KLAS'].'><label>'.$n['NAMA_KLAS'].'</label></div>';
            } $temp++;
          }  
        ?> 
        </div>
        <div class="col-md-3">
        <?php 
          $Query=mysql_query("SELECT * FROM `klasifikasi`");
          $temp = 0;
          while($n=mysql_fetch_array($Query)){
            if ($temp%3==2) {
              echo '<div class=checkbox><input type=checkbox name="klasifikasi[]" value='.$n['ID_KLAS'].'><label>'.$n['NAMA_KLAS'].'</label></div>';
            } 
          }  
        ?> 
        </div>
        </div>
        <div class="form-group">
      <label class="col-sm-2 control-label">Isi Saran/Disposisi</label>
        <div class="col-sm-10">                      
        <textarea name="disposisi" class="form-control"></textarea>  
        </div>
        </div><br>
        <div class="form-group">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          <input type="submit" value="save" class="btn btn-default" /></td>
          <input type="reset" class="btn btn-default">
          <a href="viewSM.php?id=<?php echo"$hasil2[NO]";?>" class="btn btn-default">Batal</a>
        </div>
        </div>
  </form>
  </div>
  <div class="tab-pane" id="Sekda">
  <form class="form form-horizontal" method="post" action="saveSekda.php">
    <div class="form-group">
    <br/>
    <label class="col-sm-2 control-label">Nomor</label>
      <div class="col-sm-10">
      <input type="text" name="no2" value="<?php echo"$hasil2[NO]";?>" class="form-control" placeholder="">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Nomor Disposisi</label>
      <div class="col-sm-10">
      <input type="text" name="noDisposisi2" class="form-control" placeholder="">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Jenis Disposisi</label>
      <div class="col-sm-10">
      <input type="text" name="jenis2" class="form-control" placeholder="">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Tanggal Surat</label>
      <div class="col-sm-10">
      <input type="date" name="Kirimdisposisi2" class="form-control" placeholder=""> 
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Tanggal Teriam</label>
      <div class="col-sm-10">
      <input type="date" name="Terimadisposisi2" class="form-control" placeholder="">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">No Agenda</label>
      <div class="col-sm-10">
      <input type="number" name="noAgenda2" class="form-control" placeholder="">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Diteruskan</label>
      <div class="col-md-3"> 
       <?php 
          $Query2=mysql_query("SELECT * FROM `tujuan2`");
          $temp = 0;
          while($n=mysql_fetch_array($Query2)){
            if ($temp%3==0) {
              echo '<div class=checkbox><input type=checkbox name="tujuan2[]" value='.$n['ID_TUJUAN2'].'><label>'.$n['NAMA_TUJUAN2'].'</label></div>';
            }
            $temp++;
          }  
        ?>   
        </div>
        <div class="col-md-3">  
        <?php 
          $Query2=mysql_query("SELECT * FROM `tujuan2`");
          $temp = 0;
          while($n=mysql_fetch_array($Query2)){
            if ($temp%3==1) {
              echo '<div class=checkbox><input type=checkbox name="tujuan2[]" value='.$n['ID_TUJUAN2'].'><label>'.$n['NAMA_TUJUAN2'].'</label></div>';
            }
            $temp++;
          }  
        ?>   
        </div>
        <div class="col-md-3">  
        <?php 
          $Query2=mysql_query("SELECT * FROM `tujuan2`");
          $temp = 0;
          while($n=mysql_fetch_array($Query2)){
            if ($temp%3==2) {
              echo '<div class=checkbox><input type=checkbox name="tujuan2[]" value='.$n['ID_TUJUAN2'].'><label>'.$n['NAMA_TUJUAN2'].'</label></div>';
            }
            $temp++;
          }  
        ?>   
        </div>
        </div><br>
        <div class="form-group">
      <label class="col-sm-2 control-label">Klasifikasi</label>
        <div class="col-md-3">
        <?php 
          $Query=mysql_query("SELECT * FROM `klasifikasi2`");
          $temp = 0;
          while($n=mysql_fetch_array($Query)){
            if ($temp%3==0) {
              echo '<div class=checkbox><input type=checkbox name="klasifikasi2[]" value='.$n['ID_KLAS2'].'><label>'.$n['NAMA_KLAS2'].'</label></div>';
            } $temp++;
          }  
        ?> 
        </div>
        <div class="col-md-3">
        <?php 
          $Query=mysql_query("SELECT * FROM `klasifikasi2`");
          $temp = 0;
          while($n=mysql_fetch_array($Query)){
            if ($temp%3==1) {
              echo '<div class=checkbox><input type=checkbox name="klasifikasi2[]" value='.$n['ID_KLAS2'].'><label>'.$n['NAMA_KLAS2'].'</label></div>';
            } $temp++;
          }  
        ?> 
        </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Isi Saran/Disposisi</label>
      <div class="col-sm-10">                      
      <textarea name="disposisi2" class="form-control"></textarea>  
      </div>
      </div><br>
      <div class="form-group">
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <input type="submit" value="save" class="btn btn-default" /></td>
        <input type="reset" class="btn btn-default">
        <a href="viewSM.php?id=<?php echo"$hasil2[NO]";?>" class="btn btn-default">Batal</a>
      </div>
      </div>
  </form>
<?php
  include '../bottom.php';
?>