<?php
 include '../sesi.php';
 include '../up.php'
?>

<li><i class="icon_document_alt"></i>List User</li>
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<table class="table table-striped table-advance table-hover">
<tr><th width="1000px">
&nbsp;<a href="RegUser.php"><button type="submit" class="btn btn-primary"><i class="fa fa-plus">&nbsp;</i>User</button></a><th>

<form class="form-inline" action="search_exe.php" name="form2" method="post">
<div class="form-group">
<th><input type="text" class="form-control" name="name" placeholder="nama"></th>
<th><button class="btn btn-primary" type="SUBMIT" name="SUBMIT" id="SUBMIT" value="search" >Cari</button></th></div>
</form></tr>
</table>
<table class="table table-striped table-advance table-hover" border="1">
  <thead>
    <tr>
      <th width="5px"><center>No</center></th>
      <th><center>Nama</center></th>
      <th><center>Level</center></th>
      <th ><center>Jenis Kelamin</center></th>
      <th><center>Email</center></th>
      <th><center>No Hp</center></th>
      <th><center>Action</center></th>
    </tr>
  </thead>  
  <tbody>  
  <?php
    include"../koneksi.php";
    $Query=mysql_query("SELECT * FROM login");
    $no=1;
    while($n=mysql_fetch_array($Query)){
  ?>
  <tr>
    <td><center><?php echo $no++; ?></center></td>
    <td><?php echo"$n[NAMA_USER]";?></td>
    <td><?php echo"$n[LEVEL]";?></td>
    <td><?php echo"$n[JK_USER]";?></td>
    <td><?php echo"$n[EMAIL_USER]";?></td>
    <td><?php echo"$n[HP_USER]";?></td>
    <td align="center"><div class="btn-group">
    <a class="btn btn-primary" href="formeditUser.php?id=<?php echo"$n[ID_USER]";?>">Edit</a>
    <a class="btn btn-danger" href="delUser.php?id=<?php echo"$n[ID_USER]";?>">Hapus</a>
    </div></td>
  </tr>
  <?php } ?>
  </tbody> 
</table>
</form> 

<?php
  include '../bottom.php';
?>             