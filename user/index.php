<?php
include '../koneksi.php';
include 'sesi.php';
include 'up.php';
?>

</ol>
</div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
		<div class="info-box blue-bg">
	    	<i class="icon_mail_alt"></i>
		    <div class="count">
		    	<?php
	              $result=mysql_query("SELECT * FROM surat2");
	              echo mysql_num_rows($result)."";
            	?>
		    </div>
		    
	    <div class="title">Jumlah Surat Masuk</div>						
	</div><!--/.info-box-->			
    </div><!--/.col-->
				
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
		<div class="info-box brown-bg">
			<i class="icon_mail_alt"></i>
			<div class="count">
				<?php
	              $result=mysql_query("SELECT * FROM suratkeluar");
	              echo mysql_num_rows($result)."";
	            ?>
            </div>
			
			<div class="title">Jumlah Surat Keluar</div>						
		</div><!--/.info-box-->			
	</div><!--/.col-->
  </div><!--/.row-->
  </section>
  </section>
  <!--main content end-->
  <?php
  include '../bottom.php';
  ?> 
    