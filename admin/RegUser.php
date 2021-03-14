<?php
 include '../sesi.php';
 include '../up.php';
?>
  
<li><i class="icon_document_alt"></i>Register User</li>						  	
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<header class="panel-heading">Form Register User</header>
<div class="panel-body">
  <form class="form-horizontal " method="post" action="saveUser.php">
    <div class="form-group">
    <label class="col-sm-2 control-label">Nama</label>
      <div class="col-sm-10">
      <input type="text" name="nama_user" class="form-control" placeholder="nama">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Jenis Kelamin</label>
      <div class="col-sm-10">
      <input type="radio" name="jk_user" value="Laki-laki" checked>Laki-laki
      </br></br>
      <input type="radio" name="jk_user" value="Perempuan">Perempuan
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Level</label>
      <div class="col-sm-10">
      <select name="level">
        <option value="admin">admin</option>
        
      </select>
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Email</label>
      <div class="col-sm-10">
      <input type="email" name="email_user" class="form-control" placeholder="xxxxx@xxxx.xxx">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">No Hp</label>
      <div class="col-sm-10">
      <input type="text" name="hp_user" class="form-control" placeholder="08xxxxxxxxxx">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Username</label>
      <div class="col-sm-10">
      <input type="text" name="username" class="form-control" placeholder="">
      </div>
      </div>
      <div class="form-group">
    <label class="col-sm-2 control-label">Password</label>
      <div class="col-sm-10">
      <input type="password" name="password" class="form-control" placeholder="">
      </div>
      </div>
        
      </div>
      </div>
      <div class="form-group">
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <input type="submit" name="upload" value="Simpan" class="btn btn-default" /></td>
        <input type="reset" class="btn btn-default">
        <a href="ListUser.php" class="btn btn-default">Batal</a>
      </div>
      </div>
  </form>
<?php 
  include '../bottom.php';
?>            