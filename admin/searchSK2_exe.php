<?php
  include '../sesi.php';
  include 'upprint.php';
?>

<button type="submit" class="btn btn-default" onClick="window.print()"><i class="fa fa-print"></i></button>
<h1><center>Surat Keluar</center></h1>
<table class="table table-striped table-advance table-hover" border="1">
  <thead>
    <tr style="background-color: #99ffcc">
      <th width="5px"><center>NO.</center></th>
      <th><center>TUJUAN SURAT</center></th>
      <th><center>TANGGAL SURAT</center></th>
      <th><center>TANGGAL KIRIM</center></th>
      <th><center>NO. AGENDA</center></th>
      <th><center>NO SURAT</center></th>
      <th><center>PERIHAL</center></th>
      <th><center>KET</center></th>
    </tr>
    </tr>
  </thead>  
  <tbody>  
            
  <?php
    include('config.php');
    include('../koneksi.php');
    $tgl1=$_POST['tanggal_awal'];
    $tgl2=$_POST['tanggal_akhir'];  
    $sql = mysql_query("SELECT * FROM suratkeluar where TANGGAL_SURATK between '$tgl1' AND '$tgl2' ORDER BY TANGGAL_SURATK ASC");
      if(mysql_num_rows($sql) > 0){
      $no = 1;
      while($data = mysql_fetch_assoc($sql)){
        echo '
          <tr>
          <td style="background-color: #99ffcc" align="center">'.$no.'</td>
          <td><center>'.$data['TUJUAN_SURATK'].'</center></td>
          <td><center>'.$data['TANGGAL_SURATK'].'</center></td>
          <td><center>'.$data['TANGGAL_KIRIMK'].'</center></td>
          <td><center>'.$data['NO_AGENDAK'].'</center></td>
          <td><center>'.$data['NO_SURATK'].'</center></a></td>
          <td><center>'.$data['PERIHAL_SURATK'].'</center></a></td>
          <td><center>'.$data['KET'].'</center></td>
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
