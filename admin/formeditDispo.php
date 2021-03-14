<?php
include '../sesi.php';
include '../up.php';
include"../koneksi.php";
$panggil=$_GET['id'];
$cari=mysql_query("select * from disposisibppka where NO_DISPOSISI='$panggil' ");
$hasil=mysql_fetch_array($cari);
?>

<li><i class="icon_document_alt"></i><a href="viewSM.php">List Disposisi Bppka</a></li>
</ol>
</div>
</div>
<div class="row">
 <div class="col-lg-12">
  <section class="panel">
  <header class="panel-heading">Form Edit Disposisi Bppka</header>
  <div class="panel-body">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#BPPKA" data-toggle="tab">BPPKA</a></li>
    </ul><!-- Tab panes -->
    <div class="tab-content">
    <div class="tab-pane active" id="BPPKA">
      <form class="form form-horizontal" method="post" action="editBppka.php">
        <div class="form-group"><br/>
        <label class="col-sm-2 control-label">Nomor</label>
          <div class="col-sm-10">
          <input type="text" name="no" value="<?php echo"$hasil[NO]";?>" class="form-control" placeholder="">
          </div>
          </div>
          <div class="form-group">
       <label class="col-sm-2 control-label">Nomor Disposisi</label>
          <div class="col-sm-10">
          <input type="text" name="noDisposisi" value="<?php echo"$hasil[NO_DISPOSISI]";?>" class="form-control" placeholder="">
          </div>
          </div>
          <div class="form-group">
       <label class="col-sm-2 control-label">Jenis Disposisi</label>
          <div class="col-sm-10">
          <input type="text" name="jenis" value="<?php echo"$hasil[JENIS_DISPOSISI]";?>" class="form-control" placeholder="">
          </div>
          </div>
          <div class="form-group">
       <label class="col-sm-2 control-label">Tanggal Surat</label>
          <div class="col-sm-10">
          <input type="date" name="Kirimdisposisi" value="<?php echo"$hasil[KIRIM_DISPOSISI]";?>" class="form-control" placeholder=""> 
          </div>
          </div>
          <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Terima</label>
          <div class="col-sm-10">
          <input type="date" name="Terimadisposisi" value="<?php echo"$hasil[TERIMA_DISPOSISI]";?>" class="form-control" placeholder="">
          </div>
          </div>
          <div class="form-group">
        <label class="col-sm-2 control-label">No Agenda</label>
          <div class="col-sm-10">
          <input type="number" name="noAgenda" value="<?php echo"$hasil[NO_AGENDA]";?>" class="form-control" placeholder="">
          </div>
          </div>
          <div class="form-group">
        <label class="col-sm-2 control-label">Diteruskan</label>
          <div class="col-md-3"> 
            <?php 
              $terpilih2=$hasil["TUJUAN_DISPOSISI"];
              $ArrayTerpilih2=explode(',', $terpilih2);
              $isChecked2="";
              $Query2=mysql_query("SELECT * FROM `tujuan`");
              while($n=mysql_fetch_array($Query2)){
              if (in_array($n['ID_TUJUAN'], $ArrayTerpilih2)) {
                $isChecked2="checked";
              }
              echo '<div class=checkbox><input type=checkbox '.$isChecked2.' name="tujuan[]" value='.$n['ID_TUJUAN'].'><label>'.$n['NAMA_TUJUAN'].'</label></div>';
              $isChecked2="";
               }  
            ?>
            </div>
            </div><br>
          <div class="form-group">
        <label class="col-sm-2 control-label">Klasifikasi</label>
          <div class="col-md-3"> 
            <?php 
              $terpilih=$hasil["KLASIFIKASI_DISPOSISI"];
              $ArrayTerpilih=explode(',', $terpilih);
              $isChecked="";
              $Query=mysql_query("SELECT * FROM `klasifikasi`");
              while($n=mysql_fetch_array($Query)){
              if (in_array($n['ID_KLAS'], $ArrayTerpilih)) {
                $isChecked="checked";
              }
              echo '<div class=checkbox><input type=checkbox '.$isChecked.' name="klasifikasi[]" value='.$n['ID_KLAS'].'><label>'.$n['NAMA_KLAS'].'</label></div>';
                            $isChecked="";
              }  
            ?>
            </div>
            </div>
            <div class="form-group">
          <label class="col-sm-2 control-label">Isi Saran/Disposisi</label>
            <div class="col-sm-10">                      
            <input type="text" name="disposisi" value="<?php echo"$hasil[DISPOSISI]";?>" class="form-control" placeholder="">
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