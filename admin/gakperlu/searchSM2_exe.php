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
    $name= $_POST['name2']; 
    $sql = mysql_query("SELECT * FROM surat2 INNER JOIN disposisi2 ON surat2.NO = disposisi2.NO where TANGGAL_SURAT like '%$name%' ORDER BY TANGGAL_SURAT");
    if(mysql_num_rows($sql) > 0){
      $no = 1;
      while($data = mysql_fetch_assoc($sql)){
        echo '
          <tr bgcolor="#fff">
          <td align="center">'.$no.'</td>
          <td><center>'.$data['PENGIRIM_SURAT'].'</center></td>
          <td><center>'.$data['TANGGAL_SURAT'].'</center></td>
          <td><center>'.$data['TERIMA_DISPOSISI'].'</center></td>
          <td><center>'.$data['NO_AGENDA'].'</center></td>
          <td><center>'.$data['NO_SURAT'].'</center></a></td>
          <td><center>'.$data['PERIHAL_SURAT'].'</center></a></td>
          <td><center>'.$data['DISPOSISI'].'</center></td>
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