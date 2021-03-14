<?php
include '../sesi.php';
include '../up.php';
include"../koneksi.php";
$id_user=$_GET['id'];
$cari=mysql_query("select * from tujuan where ID_TUJUAN='$id_user'");
$hasil=mysql_fetch_array($cari);
?>

</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">Form Tujuan Bppka</header>
<div class="panel-body">
<form class="form-horizontal " action="editTujBppka.php?id=<?php echo $hasil['ID_TUJUAN']?>"  method="post">
  <div class="form-group">
  <label class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
    <input type="text" name="nama_bppka" value="<?php echo"$hasil[NAMA_TUJUAN]";?>" class="form-control" placeholder="">
    </div>
    </div>

    <?php
      if($hasil['STATUS_TUJUAN']=="AKTIF"){
        $pilih_aktif="checked";
        $pilih_tidak="";
      }else if($hasil['STATUS_TUJUAN']=="TIDAK AKTIF"){
        $pilih_tidak="checked";
        $pilih_aktif="";
      }
    ?>
    <div class="form-group">
  <label class="col-sm-2 control-label">Status</label>
    <div class="col-sm-10">
    <input type="radio" name="status_klasbppka" value="AKTIF" <?php echo $pilih_aktif ?>> AKTIF
    </br></br>
    <input type="radio" name="status_klasbppka" value="TIDAK AKTIF" <?php echo $pilih_tidak ?>> TIDAK AKTIF
    </div>
    </div>
   
    <div class="form-group">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
    <input type="submit" name="update" value="update" class="btn btn-default" /></td>
    <a href="ListTujBppka.php" class="btn btn-default">Batal</a>
    </div>
    </div>
</form>
<?php
  include '../bottom.php';
?>
             