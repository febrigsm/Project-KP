<?php
  include '../sesi.php';
  include 'upprint.php';
?><button type="submit" class="btn btn-default" onClick="window.print()"><i class="fa fa-print"></i></button>
<h1><center>Surat Keluar</center></h1>
<table class="table table-striped table-advance table-hover" border="1">
  <thead>
    <tr style="background-color: white">
      <th width="5px"><center>NO.</center></th>
      <th><center>TUJUAN SURAT</center></th>
      <th><center>TANGGAL SURAT</center></th>
      <th><center>TANGGAL KIRIM</center></th>
      <th><center>NO. AGENDA</center></th>
      <th><center>NO SURAT</center></th>
      <th><center>PERIHAL</center></th>
      <th><center>KET</center></th>
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
          <td>'.$data['NO_AGENDAK'].'</td>
          <td>'.$data['NO_SURATK'].'</a></td>
          <td>'.$data['PERIHAL_SURATK'].'</a></td>
          <td>'.$data['KET'].'</td>
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