<?php
 include '../sesi.php';
 include '../up.php'
?>

<li><i class="icon_document_alt"></i><a href="ListUser.php">List User</a></li>
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<table class="table table-striped table-advance table-hover" border="1">
  <thead>
    <tr>
      <th width="5px"><center>No</center></th>
      <th><center>Nama</center></th>
      <th ><center>Jenis Kelamin</center></th>
      <th><center>Email</center></th>
      <th><center>No Hp</center></th>
      <th><center>Action</center></th>
    </tr>
  </thead>  
  <tbody>  
  <?php
    include"../koneksi.php";
    $name= $_POST['name']; 
    $Query=mysql_query("SELECT * FROM login where NAMA_USER like '%$name%' ");
    if(mysql_num_rows($Query) > 0){
    $no=1;
    while($n=mysql_fetch_array($Query)){
  ?>
  <tr>
    <td><center><?php echo $no++; ?></center></td>
    <td><?php echo"$n[NAMA_USER]";?></td>
    <td><?php echo"$n[JK_USER]";?></td>
    <td><?php echo"$n[EMAIL_USER]";?></td>
    <td><?php echo"$n[HP_USER]";?></td>
    <td align="center"><div class="btn-group">
    <a class="btn btn-primary" href="formeditUser.php?id=<?php echo"$n[id_uer]";?>">Edit</a>
    <a class="btn btn-danger" href="delUser.php?id=<?php echo"$n[id_user]";?>">Hapus</a>
    </div></td>
  </tr>
  <?php }
  }else{
	echo '
      <tr bgcolor="#fff">
      <td align="center" colspan="4" align="center">Maaf, Data Tidak Ditemukan!</td>
      </tr>
      ';
	}
	?>
  </tbody> 
</table>
</form> 

<?php
  include '../bottom.php';
?>             