<?php
  include '../sesi.php';
  include '../up.php';
?>

<li><i class="icon_document_alt"></i><a href="ListSK.php">List Surat Keluar</a></li>
</ol>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<section class="panel">
<table class="table table-striped table-advance table-hover" border="1">
  <thead>
    <tr>
      <th width="5px"><center>No.</center></th>
      <th><center>No. Surat</center></th>
      <th ><center>Tanggal Kirim</center></th>
      <th ><center>Sifat</th>
      <th><center>Kepada</center></th>
      <th><center>Perihal</center></th>
      <th width="10px"><center>Lampiran</center></th>
      <th><center>Aksi</center></th>
    </tr>
  </thead>  
  <tbody>  
            
  <?php
    include('config.php');
    include('../koneksi.php');
    $name= $_POST['name']; 
    $sql = mysql_query("SELECT * FROM suratkeluar where PERIHAL_SURATK like '%$name%'");
      if(mysql_num_rows($sql) > 0){
        $no = 1;
        while($data = mysql_fetch_assoc($sql)){
          echo '
          <tr bgcolor="#fff">
          <td align="center">'.$no.'</td>
          <td>'.$data['NO_SURATK'].'</a></td>
          <td>'.$data['TANGGAL_SURATK'].'</a></td>
          <td>'.$data['SIFATK'].'</a></td>
          <td>'.$data['TUJUAN_SURATK'].'</a></td>
          <td>'.$data['PERIHAL_SURATK'].'</a></td>
          <td><center><a href="'.$data['FILE2'].'">'.$data['FILE2'].'</a></center></td>
          <td><li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="viewSK.php?id='.$data['NOK'].'";?>Detail</a></li>
              <li><a href="formeditSK.php?id='.$data['NOK'].'";?>Edit</a></li>
              <li><a href="delSK.php?id='.$data['NOK'].'";?>Hapus</a></li>
              <li><a href="RegDisSK.php?id='.$data['NOK'].'";?>AddDisposisi</a></li>
            </ul>                         
            </td>
            </tr>
            ';
            $no++;
        }
      }else{
      echo '
         <tr bgcolor="#fff">
         <td align="center" colspan="4" align="center">Maaf, Data Tidak Ditemukan!</td>
         </tr>
      ';
      }
    ?>
  </table>
<?php
  include '../bottom.php';
?>              
