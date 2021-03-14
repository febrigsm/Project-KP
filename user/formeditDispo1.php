<?php
include 'sesi.php';
include"../koneksi.php";
include 'up.php';
$panggil=$_GET['id'];
$cari2=mysql_query("select * from disposisi1 where NO_DISPOSISI1='$panggil' ");
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
    <li class="active"><a href="#SEKDA" data-toggle="tab">SEKDA/BUPATI</a></li>
  </ul><!-- Tab panes -->
    <div class="tab-content">
    <div class="tab-pane active" id="SEKDA">
      <form class="form form-horizontal" method="post" action="editSekda.php">
      <div class="form-group"><br/>
      <label class="col-sm-2 control-label">Nomor</label>
        <div class="col-sm-10">
        <input type="text" name="no2" value="<?php echo"$hasil2[NO]";?>" class="form-control" placeholder="">
        </div>
        </div>
        <div class="form-group">
      <label class="col-sm-2 control-label">Nomor Disposisi</label>
        <div class="col-sm-10">
        <input type="text" name="noDisposisi2" value="<?php echo"$hasil2[NO_DISPOSISI1]";?>" class="form-control" placeholder="">
        </div>
        </div>
         <div class="form-group">
       <label class="col-sm-2 control-label">Jenis Disposisi</label>
          <div class="col-sm-10">
          <input type="text" name="jenis2" value="<?php echo"$hasil2[JENIS_DISPOSISI1]";?>" class="form-control" placeholder="">
          </div>
          </div>
        <div class="form-group">
      <label class="col-sm-2 control-label">Tanggal Surat</label>
        <div class="col-sm-10">
        <input type="date" name="Kirimdisposisi2" value="<?php echo"$hasil2[KIRIM_DISPOSISI1]";?>" class="form-control" placeholder=""> 
        </div>
        </div>
        <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Terima</label>
        <div class="col-sm-10">
        <input type="date" name="Terimadisposisi2" value="<?php echo"$hasil2[TERIMA_DISPOSISI1]";?>" class="form-control" placeholder="">
        </div>
        </div>
        <div class="form-group">
      <label class="col-sm-2 control-label">No Agenda</label>
        <div class="col-sm-10">
        <input type="number" name="noAgenda2" value="<?php echo"$hasil2[NO_AGENDA1]";?>" class="form-control" placeholder="">
        </div>
        </div>
        <div class="form-group">
      <label class="col-sm-2 control-label">Pengirim</label>
        <div class="col-sm-10">
        <input type="text" name="pengirimDisposisi2" value="<?php echo"$hasil2[PENGIRIM_DISPOSISI1]";?>" class="form-control" placeholder="">
        </div>
        </div>
               
        <div class="form-group">
      <label class="col-sm-2 control-label">Diteruskan</label>
        <div class="col-md-3"> 
        <?php 
         $terpilih2=$hasil2["TUJUAN_DISPOSISI1"];
         $ArrayTerpilih2=explode(',', $terpilih2);
         $isChecked2="";
         $Query2=mysql_query("SELECT * FROM `tujuan2`");
        while($n=mysql_fetch_array($Query2)){
          if (in_array($n['ID_TUJUAN2'], $ArrayTerpilih2)) {
            $isChecked2="checked";
          }
          echo '<div class=checkbox><input type=checkbox '.$isChecked2.' name="tujuan[]" value='.$n['ID_TUJUAN2'].'><label>'.$n['NAMA_TUJUAN2'].'</label></div>';
          $isChecked2="";
          }  
        ?>
        </div>
        </div><br>
        <div class="form-group">
      <label class="col-sm-2 control-label">Klasifikasi</label>
        <div class="col-md-3"> 
        <?php 
          $terpilih=$hasil2["KLASIFIKASI_DISPOSISI1"];
          $ArrayTerpilih=explode(',', $terpilih);
          $isChecked="";
          $Query=mysql_query("SELECT * FROM `klasifikasi2`");
          while($n=mysql_fetch_array($Query)){
            if (in_array($n['ID_KLAS2'], $ArrayTerpilih)) {
              $isChecked="checked";
            }
            echo '<div class=checkbox><input type=checkbox '.$isChecked.' name="klasifikasi[]" value='.$n['ID_KLAS2'].'><label>'.$n['NAMA_KLAS2'].'</label></div>';
              $isChecked="";
           }  
        ?>
        </div>
        </div>
        <div class="form-group">
      <label class="col-sm-2 control-label">Isi Saran/Disposisi</label>
        <div class="col-sm-10">                      
        <input type="text" name="disposisi2" value="<?php echo"$hasil2[DISPOSISI1]";?>" class="form-control" placeholder="">
        </div>
        </div><br>
        <div class="form-group">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
          <button href="ViewSM.php" class="btn btn-primary">Batal</button> 
        </div>
        </div>
   </form>
<?php
  include '../bottom.php';
?>              