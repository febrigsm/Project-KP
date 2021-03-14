<?php
include '../sesi.php';
include '../up.php';
include"../koneksi.php";
$panggil=$_GET['id'];
$cari2=mysql_query("select * from dispokeluar2 where NO_DISPOSISIK2='$panggil' ");
$hasil2=mysql_fetch_array($cari2);
?>

    <li><i class="icon_document_alt"></i><a href="RegSK.php">Register Surat Keluar</a></li>
    <li><i class="icon_documents_alt"></i>Register Disposisi Surat Keluar</li>
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
  <form class="form form-horizontal" method="post" action="editSekdaSK.php">
    <div class="form-group"><br/>
    <label class="col-sm-2 control-label">Nomor</label>
      <div class="col-sm-10">
      <input type="text" name="no2" value="<?php echo"$hasil2[NOK]";?>" class="form-control" placeholder="">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Nomor Disposisi</label>
      <div class="col-sm-10">
      <input type="text" name="noDisposisi2" value="<?php echo"$hasil2[NO_DISPOSISIK2]";?>" class="form-control" placeholder="">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Tanggal Surat</label>
      <div class="col-sm-10">
      <input type="date" name="Kirimdisposisi2" value="<?php echo"$hasil2[KIRIM_DISPOSISIK2]";?>" class="form-control" placeholder=""></div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Tanggal Terima</label>
      <div class="col-sm-10">
      <input type="date" name="Terimadisposisi2" value="<?php echo"$hasil2[TERIMA_DISPOSISIK2]";?>" class="form-control" placeholder="">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">No Agenda</label>
      <div class="col-sm-10">
      <input type="text" name="noAgenda2" value="<?php echo"$hasil2[NO_AGENDAK2]";?>" class="form-control" placeholder="">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Pengirim</label>
      <div class="col-sm-10">
      <input type="text" name="pengirimDisposisi2" value="<?php echo"$hasil2[PENGIRIM_DISPOSISIK2]";?>" class="form-control" placeholder="">
      </div>
      </div>
                    
      <div class="form-group">
    <label class="col-sm-2 control-label">Diteruskan</label>
      <div class="col-md-3"> 
      <?php 
        $terpilih3=$hasil2["TUJUAN_DISPOSISIK2"];
        $ArrayTerpilih3=explode(',', $terpilih3);
        $isChecked3="";
        $query3=mysql_query("SELECT * FROM `tujuan2`");
        while($n=mysql_fetch_array($query3)){
          if (in_array($n['ID_TUJUAN2'], $ArrayTerpilih3)) {
          $isChecked3="checked";
          }
          echo '<div class=checkbox><input type=checkbox '.$isChecked3.' name="tujuan2[]" value='.$n['ID_TUJUAN2'].'><label>'.$n['NAMA_TUJUAN2'].'</label></div>';
          $isChecked3="";
        }  
      ?>
      </div>
      </div><br>
      <div class="form-group">
    <label class="col-sm-2 control-label">Klasifikasi</label>
      <div class="col-md-3"> 
      <?php 
        $terpilih4=$hasil2["KLASIFIKASI_DISPOSISIK2"];
        $ArrayTerpilih4=explode(',', $terpilih4);
        $isChecked4="";
        $query4=mysql_query("SELECT * FROM `klasifikasi2`");
        while($n=mysql_fetch_array($query4)){
          if (in_array($n['ID_KLAS2'], $ArrayTerpilih4)) {
            $isChecked4="checked";
          }
          echo '<div class=checkbox><input type=checkbox '.$isChecked4.' name="klasifikasi2[]" value='.$n['ID_KLAS2'].'><label>'.$n['NAMA_KLAS2'].'</label></div>';
          $isChecked4="";
        }  
      ?>
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Isi Saran/Disposisi</label>
      <div class="col-sm-10">                      
      <input type="text" name="disposisi2" value="<?php echo"$hasil2[DISPOSISIK2]";?>" class="form-control" placeholder="">  
      </div>
      </div><br>
      <div class="form-group">
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
        <button href="ViewSK.php" class="btn btn-primary">Batal</button> 
      </div>
      </div>
      </form>
<?php
  include '../bottom.php';
?>
                