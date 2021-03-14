<?php
 include '../sesi.php';
 include '../up.php'
?>

<li><i class="icon_document_alt"></i><a href="RegKlasBppka.php">Input Klasifikasi Bppka</a></li>
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
</br>
&nbsp;<a href="RegKlasBppka.php"><button type="submit" class="btn btn-primary"><i class="fa fa-plus">&nbsp;</i>Klasifikasi</button></a>&nbsp;<br><br>
<table class="table table-striped table-advance table-hover" border="1">
  <thead>
    <tr>
      <th width="50px"><center>No.</center></th>
      <th width="100px"><center>Nama</center></th>
      <th width="100px"><center>Status</center></th>
      <th width="10px"><center>Action</center></th>
    </tr>
  </thead>  
  <tbody>  
  <?php
    include"../koneksi.php";
    $Query=mysql_query("SELECT * FROM klasifikasi");
    $no=1;
    while($n=mysql_fetch_array($Query)){
  ?>
  <tr>
    <td><center><?php echo $no++; ?></center></td>
    <td><?php echo"$n[NAMA_KLAS]";?></td>
    <td><center><?php echo"$n[STATUS_KLAS]";?></center></td>
    <td align="center"><div class="btn-group">
    <a class="btn btn-primary" href="formeditKlasBppka.php?id=<?php echo"$n[ID_KLAS]";?>">Edit</a>
    <a class="btn btn-danger" href="delKlasBppka.php?id=<?php echo"$n[ID_KLAS]";?>">Hapus</a>
    </div></td>
  </tr>
  <?php } ?>
  </tbody>  
</table>

<?php
  include '../bottom.php';
?>             