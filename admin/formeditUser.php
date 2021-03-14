<?php
include '../sesi.php';
include '../up.php';
include"../koneksi.php";
$ID_USER=$_GET['id'];
$cari=mysql_query("select * from login where ID_USER='$ID_USER'");
$hasil=mysql_fetch_array($cari);
?>

<li><i class="icon_document_alt"></i><a href="ListUser.php">List User</a></li>
<li><i class="fa fa-pencil"></i>Edit User</li>
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">Form User</header>
<div class="panel-body">
<form class="form-horizontal " action="editUser.php?id=<?php echo $hasil['ID_USER']?>"  method="post">
  <div class="form-group">
  <label class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
    <input type="text" name="nama_user" value="<?php echo"$hasil[NAMA_USER]";?>" class="form-control" placeholder="">
    </div>
    </div>
    <?php
      if($hasil['JK_USER']=="Laki-laki"){
        $pilih_pria="checked";
        $pilih_wanita="";
      }else if($hasil['JK_USER']=="Perempuan"){
        $pilih_wanita="checked";
        $pilih_pria="";
      }
    ?>
    <div class="form-group">
  <label class="col-sm-2 control-label">Jenis Kelamin</label>
    <div class="col-sm-10">
    <input type="radio" name="jk_user" value="Laki-laki" <?php echo $pilih_pria ?>> Laki-laki
    </br></br>
    <input type="radio" name="jk_user" value="Perempuan" <?php echo $pilih_wanita ?>> Perempuan
    </div>
    </div>
    <?php 
      if($hasil['LEVEL']=="admin"){
        $pilih_admin="selected";
        $pilih_user="";
      }else if($hasil['LEVEL']=="user"){
        $pilih_admin="";
        $pilih_user="selected";
      } 
    ?>
    <div class="form-group">
  <label class="col-sm-2 control-label">Level User</label>
    <div class="col-sm-10">
    <select name="level">
    <option value="admin" <?php echo $pilih_admin ?>>admin</option>
    <option value="user" <?php echo $pilih_user ?>>user</option>
    </select>
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
    <input type="email" name="email_user" value="<?php echo"$hasil[EMAIL_USER]";?>" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">No HP</label>
    <div class="col-sm-10">
    <input type="text" name="hp_user" value="<?php echo"$hasil[HP_USER]";?>" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
    <input type="text" name="username" value="<?php echo"$hasil[USERNAME]";?>" class="form-control" placeholder="">
    </div>
    </div>
    <div class="form-group">
  <label class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
    <input type="password" name="password" value="<?php echo"$hasil[PASSWORD]";?>" class="form-control">
    </div>
    </div>
    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
    <input type="submit" name="update" value="update" class="btn btn-default" /></td>
    <a href="ListUser.php" class="btn btn-default">Batal</a>
    </div>
    </div>
</form>
<?php
  include '../bottom.php';
?>
             