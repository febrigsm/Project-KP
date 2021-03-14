<?php
  include 'up.php';
?>
    
<li><i class="icon_document_alt"></i><a href="ListSK.php">List Surat Keluar</a></li>
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<table class="table table-striped table-advance table-hover" border="1">
  <thead>
    <tr>
      <th><center>No.</center></th>
      <th><center>No. Disposisi</center></th>
      <th><center>Tanggal Kirim</center></th>
      <th><center>Tanggal Terima</center></th>
      <th><center>No. Agenda</center></th>
      <th><center>Dari</center></th>
      <th><center>Diteruskan</center></th>
      <th><center>Klasifikasi</center></th>
      <th><center>Disposisi</center></th>
    </tr>
  </thead>  
  <tbody>  
  <?php
    include"../koneksi.php";
    $name= $_POST['name']; 
    $Query=mysql_query("SELECT * FROM disposisi2 WHERE NO_DISPOSISI like '%$name%'");
    $no=1;
    while($n=mysql_fetch_array($Query)){
    ?>
    <tr>
      <td><center><?php echo $no++; ?></center></td>
      <td><?php echo"$n[NO_DISPOSISI]";?></td>
      <td><?php echo"$n[KIRIM_DISPOSISI]";?></td>
      <td><?php echo"$n[TERIMA_DISPOSISI]";?></td>
      <td><?php echo"$n[NO_AGENDA]";?></td>
      <td><?php echo"$n[PENGIRIM_DISPOSISI]";?></td>
      <td>
      <?php
        $arr_klas2 = explode(',', "$n[TUJUAN_DISPOSISI]");
        for ($y = 0; $y < sizeof($arr_klas2)-1; $y++) {
          $Q2=mysql_query("SELECT * FROM tujuan WHERE ID_TUJUAN='$arr_klas2[$y]'");
          $nQ2=mysql_fetch_array($Q2);
          echo "$nQ2[NAMA_TUJUAN], ";
        }
      ?>
      </td>
      <td>
      <?php
        $arr_klas = explode(',', "$n[KLASIFIKASI_DISPOSISI]");
        for ($x = 0; $x < sizeof($arr_klas)-1; $x++) {
          $Q=mysql_query("SELECT * FROM Klasifikasi WHERE ID_KLAS='$arr_klas[$x]'");
          $nQ=mysql_fetch_array($Q);
          echo "$nQ[NAMA_KLAS], ";
        }
      ?>
      </td>
      <td><?php echo"$n[DISPOSISI]";?></td>
    </tr>
 <?php } ?>     

 <?php
  $name= $_POST['name']; 
  $query=mysql_query("SELECT * FROM disposisi1 WHERE NO_DISPOSISI1 like '%$name%'");
  while($m=mysql_fetch_array($query)){
  ?>
  <tr>
    <td><center><?php echo $no++; ?></center></td>
    <td><?php echo"$m[NO_DISPOSISI1]";?></td>
    <td><?php echo"$m[KIRIM_DISPOSISI1]";?></td>
    <td><?php echo"$m[TERIMA_DISPOSISI1]";?></td>
    <td><?php echo"$m[NO_AGENDA1]";?></td>
    <td><?php echo"$m[PENGIRIM_DISPOSISI1]";?></td>
    <td>
    <?php
        $arr_klas2 = explode(',', "$m[TUJUAN_DISPOSISI1]");
        for ($y = 0; $y < sizeof($arr_klas2)-1; $y++) {
          $Q2=mysql_query("SELECT * FROM tujuan2 WHERE ID_TUJUAN2='$arr_klas2[$y]'");
          $nQ2=mysql_fetch_array($Q2);
          echo "$nQ2[NAMA_TUJUAN2], ";
        }
      ?>
      </td>
      <td>
      <?php
        $arr_klas = explode(',', "$m[KLASIFIKASI_DISPOSISI1]");
        for ($x = 0; $x < sizeof($arr_klas)-1; $x++) {
          $Q=mysql_query("SELECT * FROM klasifikasi2 WHERE ID_KLAS2='$arr_klas[$x]'");
          $nQ=mysql_fetch_array($Q);
          echo "$nQ[NAMA_KLAS2], ";
        }
      ?>
    </td>
    <td><?php echo"$m[DISPOSISI1]";?></td>
  </tr>
  <?php } ?>
  </tbody>
</table>

<?php 
  include '../bottom.php';
?>