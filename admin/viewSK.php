<?php
  include '../sesi.php';
  include '../up.php';
?>
  	
<li><i class="icon_document_alt"></i><a href="ListSK.php">List Surat Keluar</a></li>
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">List Didposisi</header><br>
<a href="regDisSK.php?id=<?php echo"$_GET[id]";?>"><button type="submit" class="btn btn-primary">&nbsp;</i>+Disposisi</button></a><br><br>
<table class="table table-striped table-advance table-hover" border="1">
  <thead>
    <tr>
      <th><center>No.</center></th>
      <th><center>No. Disposisi</center></th>
      <th><center>Tanggal Kirim</center></th>
      <th><center>Tanggal Terima</center></th>
      <th><center>No. Agenda</center></th>
      <th><center>Dari</center></th>
      <th><center>Diteruska</center></th>
      <th><center>Klasifikasi</center></th>
      <th><center>Disposisi</center></th>
      <th><center>Action</center></th>
    </tr>
 </thead>  
 <tbody>  
 <?php
    include"../koneksi.php";
    $panggil=$_GET['id'];
    $Query=mysql_query("SELECT * FROM dispokeluar WHERE NOK='$panggil'");
    $no=1;
    while($n=mysql_fetch_array($Query)){
  ?>
  <tr>
    <td><center><?php echo $no++; ?></center></td>
    <td><?php echo"$n[NO_DISPOSISIK]";?></td>
    <td><?php echo"$n[KIRIM_DISPOSISIK]";?></td>
    <td><?php echo"$n[TERIMA_DISPOSISIK]";?></td>
    <td><?php echo"$n[NO_AGENDAK]";?></td>
    <td><?php echo"$n[PENGIRIM_DISPOSISIK]";?></td>
    <td>
    <?php
      $arr_klas2 = explode(',', "$n[TUJUAN_DISPOSISIK]");
        for ($y = 0; $y < sizeof($arr_klas2)-1; $y++) {
          $Q2=mysql_query("SELECT * FROM tujuan WHERE ID_TUJUAN='$arr_klas2[$y]'");
          $nQ2=mysql_fetch_array($Q2);
          echo "$nQ2[NAMA_TUJUAN], ";
        }
      ?>
      </td>
      <td>
      <?php
        $arr_klas = explode(',', "$n[KLASIFIKASI_DISPOSISIK]");
        for ($x = 0; $x < sizeof($arr_klas)-1; $x++) {
          $Q=mysql_query("SELECT * FROM Klasifikasi WHERE ID_KLAS='$arr_klas[$x]'");
          $nQ=mysql_fetch_array($Q);
          echo "$nQ[NAMA_KLAS], ";
        }
      ?>
      </td>
    <th><?php echo"$n[DISPOSISIK]";?></th>
    <td><div class="btn-group">
    <a class="btn btn-primary" href="formeditDispoSK.php?id=<?php echo"$n[NO_DISPOSISIK]";?>">Edit</a>
    <a class="btn btn-danger" href="delDisSK.php?id=<?php echo"$_GET[id]&id_dis=$n[NO_DISPOSISIK]";?>">Hapus</a>
    </div></td>
  </tr>
  <?php } ?>                          
                   
  <?php
    $panggil=$_GET['id'];
    $query=mysql_query("SELECT * FROM dispokeluar2 WHERE NOK='$panggil'");
    while($m=mysql_fetch_array($query)){
  ?>
  <tr>
    <td><center><?php echo $no++; ?></center></td>
    <td><?php echo"$m[NO_DISPOSISIK2]";?></td>
    <td><?php echo"$m[KIRIM_DISPOSISIK2]";?></td>
    <td><?php echo"$m[TERIMA_DISPOSISIK2]";?></td>
    <td><?php echo"$m[NO_AGENDAK2]";?></td>
    <td><?php echo"$m[PENGIRIM_DISPOSISIK2]";?></td>
    <td>
    <?php
        $arr_klas2 = explode(',', "$m[TUJUAN_DISPOSISIK2]");
        for ($y = 0; $y < sizeof($arr_klas2)-1; $y++) {
          $Q2=mysql_query("SELECT * FROM tujuan2 WHERE ID_TUJUAN2='$arr_klas2[$y]'");
          $nQ2=mysql_fetch_array($Q2);
          echo "$nQ2[NAMA_TUJUAN2], ";
        }
      ?>
      </td>
      <td>
      <?php
        $arr_klas = explode(',', "$m[KLASIFIKASI_DISPOSISIK2]");
        for ($x = 0; $x < sizeof($arr_klas)-1; $x++) {
          $Q=mysql_query("SELECT * FROM klasifikasi2 WHERE ID_KLAS2='$arr_klas[$x]'");
          $nQ=mysql_fetch_array($Q);
          echo "$nQ[NAMA_KLAS2], ";
        }
      ?>
    </td>
    <td><?php echo"$m[DISPOSISIK2]";?></td>
    <td><div class="btn-group">
    <a class="btn btn-primary" href="formeditDispoSK2.php?id=<?php echo"$m[NO_DISPOSISIK2]";?>">Edit</a>
    <a class="btn btn-danger" href="delDisSK.php?id=<?php echo"$_GET[id]&id_dis=$m[NO_DISPOSISIK2]";?>">Hapus</a>
    </div></td>
  </tr>
  <?php } ?>
  </tbody>
</table>
<?php 
  include '../bottom.php';
?>