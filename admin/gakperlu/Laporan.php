<?php
  include '../sesi.php';
  include 'upprint.php';
?>
<button type="submit" class="btn btn-default" onClick="window.print()"><i class="fa fa-print"></i></button>
<h1><center>Surat Masuk</center></h1>
<table class="table table-striped table-advance table-hover" border="1">
  <thead>
    <tr style="background-color: white">
      <th width="5px"><center>NO.</center></th>
      <th><center>SURAT DARI</center></th>
      <th><center>TANGGAL SURAT</center></th>
      <th><center>TANGGAL TERIMA</center></th>
      <th><center>NO. AGENDA</center></th>
      <th width="10px"><center>NO SURAT</center></th>
      <th><center>PERIHAL</center></th>
      <th><center>DISPOSISI</center></th>
    </tr>
  </thead>  
  <tbody>  
  <?php
    include('config.php');
    include('../koneksi.php');
    $sql = mysql_query("SELECT * FROM surat2 INNER JOIN disposisi2 ON surat2.NO = disposisi2.NO ORDER BY TANGGAL_SURAT ASC");
    if(mysql_num_rows($sql) > 0){
      $no = 1;
      while($data = mysql_fetch_assoc($sql)){
        echo '
          <tr bgcolor="#fff">
          <td align="center">'.$no.'</td>
          <td>'.$data['PENGIRIM_SURAT'].'</td>
          <td>'.$data['TANGGAL_SURAT'].'</td>
          <td>'.$data['TERIMA_DISPOSISI'].'</td>
          <td>'.$data['NO_AGENDA'].'</td>
          <td>'.$data['NO_SURAT'].'</a></td>
          <td>'.$data['PERIHAL_SURAT'].'</a></td>
          <td>'.$data['DISPOSISI'].'</td>
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