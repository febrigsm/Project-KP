<?php
 include '../sesi.php';
 include '../up.php'
?>

<li><i class="icon_document_alt"></i><a href="RegTujSekda.php">Input Tujuan Sekda</a></li>
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
</br>
&nbsp;<a href="RegTujSekda.php"><button type="submit" class="btn btn-primary"><i class="fa fa-plus">&nbsp;</i>tujuan</button></a>&nbsp;<br><br>
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
    $Query=mysql_query("SELECT * FROM tujuan2");
    $no=1;
    while($n=mysql_fetch_array($Query)){
  ?>
  <tr>
    <td><center><?php echo $no++; ?></center></td>
    <td><?php echo"$n[NAMA_TUJUAN2]";?></td>
    <td><center><?php echo"$n[STATUS_TUJUAN2]";?></center></td>
    <td align="center"><div class="btn-group">
    <a class="btn btn-primary" href="formeditTujSekda.php?id=<?php echo"$n[ID_TUJUAN2]";?>">Edit</a>
    <a class="btn btn-danger" href="delTujSekda.php?id=<?php echo"$n[ID_TUJUAN2]";?>">Hapus</a>
    </div></td>
  </tr>
  <?php } ?>
  </tbody>  
</table>

<?php
  include '../bottom.php';
?>             