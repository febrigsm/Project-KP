<?php
 include '../sesi.php';
 include '../up.php'
?>

<li><i class="icon_document_alt"></i><a href="RegKlasSeksa.php">Input Klasifikasi Sekda</a></li>
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
</br>
&nbsp;<a href="RegKlasSeksa.php"><button type="submit" class="btn btn-primary"><i class="fa fa-plus">&nbsp;</i>Klasifikasi</button></a>&nbsp;<br><br>
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
    $Query=mysql_query("SELECT * FROM klasifikasi2");
    $no=1;
    while($n=mysql_fetch_array($Query)){
  ?>
  <tr>
    <td><center><?php echo $no++; ?></center></td>
    <td><?php echo"$n[NAMA_KLAS2]";?></td>
    <td><center><?php echo"$n[STATUS_KLAS]";?></center></td>
    <td align="center"><div class="btn-group">
    <a class="btn btn-primary" href="formeditKlasSekda.php?id=<?php echo"$n[ID_KLAS2]";?>">Edit</a>
    <a class="btn btn-danger" href="delKlasSekda.php?id=<?php echo"$n[ID_KLAS2]";?>">Hapus</a>
    </div></td>
  </tr>
  <?php } ?>
  </tbody>  
</table>

<?php
  include '../bottom.php';
?>             