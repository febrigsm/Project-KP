<?php
  include '../sesi.php';
  include '../up.php';
?>

<li><i class="icon_document_alt"></i>List Surat Masuk</li>
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<table class="table table-striped table-advance table-hover">
<tr><th width="1000px">
&nbsp;<a href="RegSM.php"><button type="submit" class="btn btn-primary"><i class="fa fa-plus">&nbsp;</i>Surat</button></a> &nbsp;<a href="Laporan.php"><button type="submit" class="btn btn-primary">Laporan</button></a></th>

<form class="form-inline" action="searchSM_exe.php" name="form2" method="post">
<div class="form-group">
<th><input type="text" class="form-control" name="name" placeholder="perihal"></th>
<th><button class="btn btn-primary" type="SUBMIT" name="SUBMIT" id="SUBMIT" value="search" >Cari</button></th></div>
</form>
</table>

<table class="table table-striped table-advance table-hover" border="1">
  <thead>
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
          <tr bgcolor="#fff">
          <td align="center">'.$no.'</td>
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
        <tr bgcolor="#fff">
        <td align="center" colspan="4" align="center">Tidak ada data!</td>
        </tr>
        ';
    }
?> 
</table>

<?php
  include '../bottom.php';
?>