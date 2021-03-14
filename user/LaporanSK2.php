<?php
  include 'sesi.php';
  include 'upprint.php';
?>

<h1><center><label>Input Range Tanggal yang Akan Diprint</label></center></h1>

<form class="form-inline" action="searchSK2_exe.php" name="form2" method="post">
<table class="table table-striped table-advance table-hover">
  <tr>
    <div class="form-group">
    <th width="2000px"><a href="ListSK.php"><label class="btn btn-primary"><i class="fa fa-mail-reply"></i></label></a></th>
    <th><input type="date" class="form-control" name="tanggal_awal"></th>
    <th><input type="date" class="form-control" name="tanggal_akhir"></th>
    <th><button class="btn btn-primary" type="SUBMIT" name="SUBMIT" value="search"><i class="fa fa-search"></i></button></th>
    </div>
  </tr>
</table>
  
</form>
<table class="table table-striped table-advance table-hover" border="1">
  <thead style="background-color: #99ffcc">
    <tr>
      <th width="5px"><center>No.</center></th>
      <th><center>Tujuan</center></th>
      <th ><center>Tanggal Surat</center></th>
      <th ><center>Tanggal Dikirim</center></th>
      <th ><center>Sifat</th>
      <th ><center>No. Agenda</th>
      <th><center>No. Surat</center></th>
      <th><center>Perihal</center></th>
      <th width="10px"><center>Lampiran</center></th>
      <th><center>Ket</center></th>
      <th><center>Aksi</center></th>
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
          <tr>
          <td style="background-color: #99ffcc" align="center">'.$no.'</td>
          <td>'.$data['TUJUAN_SURATK'].'</td>
          <td>'.$data['TANGGAL_SURATK'].'</td>
          <td>'.$data['TANGGAL_KIRIMK'].'</td>
          <td>'.$data['SIFATK'].'</td>
          <td>'.$data['NO_AGENDAK'].'</td>
          <td>'.$data['NO_SURATK'].'</td>
          <td>'.$data['PERIHAL_SURATK'].'</td>
          <td><center><a href="'.$data['file2'].'">'.$data['nama_file2'].'</center></td>
          <td>'.$data['KET'].'</td>
          <td><li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="formeditSK.php?id='.$data['NOK'].'";?>Edit</a></li>
              <li><a href="delSK.php?id='.$data['NOK'].'";?>Hapus</a></li>
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
