<?php
  include 'up.php';
?>

<li><i class="icon_document_alt"></i>List Surat Keluar</li>
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<table class="table table-striped table-advance table-hover">
<tr><th width="1000px">

<form class="form-inline" action="searchSK_exe.php" name="form2" method="post">
<div class="form-group">
<th><input type="text" class="form-control" name="name" placeholder="perihal"></th>
<th><button class="btn btn-primary" type="SUBMIT" name="SUBMIT" id="SUBMIT" value="search" >Cari</button></th></div>
</form></tr>
</table>
<table class="table table-striped table-advance table-hover" border="1">
  <thead>
    <tr>
      <th width="5px"><center>No.</center></th>
      <th><center>Tujuan</center></th>
      <th ><center>Tanggal Surat</center></th>
      <th ><center>Tanggal Dikirim</center></th>
      <th ><center>Sifat</th>
      <th ><center>No. Agenda</th>
      <th><center>No. Surat</center></th>
      <th><center>Perihal</center></th>
      <th><center>Ket</center></th>
    </tr>
  </thead>  
  <tbody>  
            
  <?php
    include('config.php');
    include('../koneksi.php');
    $sql = mysql_query("SELECT * FROM suratkeluar ORDER BY TANGGAL_SURATK ASC");
      if(mysql_num_rows($sql) > 0){
        $no = 1;
        while($data = mysql_fetch_assoc($sql)){
          echo '
          <tr bgcolor="#fff">
          <td align="center">'.$no.'</td>
          <td>'.$data['TUJUAN_SURATK'].'</td>
          <td>'.$data['TANGGAL_SURATK'].'</td>
          <td>'.$data['TANGGAL_KIRIMK'].'</td>
          <td>'.$data['SIFATK'].'</td>
          <td>'.$data['NO_AGENDAK'].'</td>
          <td>'.$data['NO_SURATK'].'</td>
          <td>'.$data['PERIHAL_SURATK'].'</td>
          <td>'.$data['KET'].'</td>
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
