<div id="header">
	
<?php if(!isset($_SESSION['level'])){ ?>
<div id="login_form">
<form class="login-form" action="proses_login.php?op=in" method="post">       
  <div class="login-wrap">
  <p class="login-img"><i class="icon_lock_alt"></i></p>
  <div class="input-group">
  <span class="input-group-addon"><i class="icon_profile"></i></span>
  <input type="text" name="USERNAME" class="form-control" placeholder="USERNAME">
  </div>
  <div class="input-group">
  <span class="input-group-addon"><i class="icon_key_alt"></i></span>
  <input type="PASSWORD" name="PASSWORD" class="form-control" placeholder="PASSWORD">
  </div><br><br>
  <button class="btn btn-primary btn-lg btn-block" name="cek" value="login" type="submit">Login</button>     
</form>
	<?php } ?>
	<?php
	if (isset($_SESSION['level'])) { ?>
		<a type="button" id="tombol_keluar" href="../proses_login.php?op=out"/>LOGOUT</a>
	<?php } ?>
</div>