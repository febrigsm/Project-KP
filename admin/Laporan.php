<?php
  include '../sesi.php';
  include 'upprint.php';
?>

<h1><center><label>Input Range Data yang Akan Diprint</label></center></h1>

<form class="form-inline" action="searchSM2_exe.php" name="form2" method="post">
<table class="table table-striped table-advance table-hover">
  <tr>
    <div class="form-group">
    <th width="2000px"><a href="ListSM.php"><label class="btn btn-primary"><i class="fa fa-mail-reply"></i></label></a></th>
    <th><input type="date" class="form-control" name="tanggal_awal"></th>
    <th><input type="date" class="form-control" name="tanggal_akhir"></th>
    <th><button class="btn btn-primary" type="SUBMIT" name="SUBMIT" value="search"><i class="fa fa-search"></i></button></th>
    </div>
  </tr>
</table>
  
</form>
<table class="table table-striped table-advance table-hover" border="1">
  <thead style="background: wheat;">
    <tr>
      <th width="5px"><center>No.</center></th>
      <th><center>No. Surat</center></th>
      <th><center>Tanggal Surat</center></th>
      <th width="10px"><center>Sifat</center></th>
      <th><center>Surat Dari</center></th>
      <th><center>Perihal</center></th>
      <th width="10px"><center>Lampiran</center></th>
      <th><center>Aksi</center></th>
    </tr>
  </thead>  
  <tbody>  
  <?php
    include('config.php');
    include('../koneksi.php');
    $sql = mysql_query("SELECT * FROM suratmasuk ORDER BY TANGGAL_SURAT ASC");
    if(mysql_num_rows($sql) > 0){
      $no = 1;
      while($data = mysql_fetch_assoc($sql)){
        echo '
          <tr>
          <td  style="background: wheat;" align="center">'.$no.'</td>
          <td>'.$data['NO_SURAT'].'</a></td>
          <td>'.$data['TANGGAL_SURAT'].'</a></td>
          <td>'.$data['SIFAT'].'</a></td>
          <td>'.$data['PENGIRIM_SURAT'].'</a></td>
          <td>'.$data['PERIHAL_SURAT'].'</a></td>
          <td><center><a href="'.$data['FILE'].'">'.$data['FILE'].'</a></center></td>
          <td><li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="viewSM.php?id='.$data['NO'].'";?>Detail</a></li>
            <li><a href="formeditSM.php?id='.$data['NO'].'";?>Edit</a></li>
            <li><a href="delSM.php?id='.$data['NO'].'";?>Hapus</a></li>
            <li><a href="RegDisSM.php?id='.$data['NO'].'";?>AddDisposisi</a></li>
          </ul>                         
          </td>
          </tr>
          ';
          $no++;
      }
    }else{
      echo '
        <tr bgcolor="white">
        <td align="center" colspan="4" align="center">Tidak ada data!</td>
        </tr>
        ';
    }
?> 
</table>

<?php
  include '../bottom.php';
?>