<?php
 include '../sesi.php';
 include '../up.php'
?>

<li><i class="icon_document_alt"></i><a href="RegTujBppka.php">Input Tujuan Bppka</a></li>
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
</br>
&nbsp;<a href="RegTujBppka.php"><button type="submit" class="btn btn-primary"><i class="fa fa-plus">&nbsp;</i>tujuan</button></a>&nbsp;<br><br>
<table class="table table-striped table-advance table-hover" border="1">
  <thead>
    <tr>
      <th><center>No.</center></th>
      <th><center>Nama</center></th>
      <th><center>Status</center></th>
      <th><center>Action</center></th>
    </tr>
  </thead>  
  <tbody>  
  <?php
    include"../koneksi.php";
    $Query=mysql_query("SELECT * FROM tujuan");
    $no=1;
    while($n=mysql_fetch_array($Query)){
  ?>
  <tr>
    <td><center><?php echo $no++; ?></center></td>
    <td><?php echo"$n[NAMA_TUJUAN]";?></td>
    <td><center><?php echo"$n[STATUS_TUJUAN]";?></center></td>
    <td align="center"><div class="btn-group">
    <a class="btn btn-primary" href="formeditTujBppka.php?id=<?php echo"$n[ID_TUJUAN]";?>">Edit</a>
    <a class="btn btn-danger" href="delTujBppka.php?id=<?php echo"$n[ID_TUJUAN]";?>">Hapus</a>
    </div></td>
  </tr>
  <?php } ?>
  </tbody>  
</table>

<?php
  include '../bottom.php';
?>             