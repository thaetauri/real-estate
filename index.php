<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>BuildUp Real Estate</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<link href="menu_assets/styles.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php include_once "library/inc.connection.php"; ?>
<div id="main_container">

<div id="header">

       <div id="logo">
        <a href="index.php"></a>
       </div>
           
       <div class="banner_adds"></div>    

<div id='cssmenu'>
	<?php
        if(isset($_SESSION['status'])=="1"){
			include "menu_admin.php";
		}
		else if(isset($_SESSION['status'])=="2"){
			include "menu_user.php";
		}
		else{
			include "u_menu.php";
		}
    ?>
</div>

</div>
    

    <div id="main_content"> 
    	<div class="column1">
        	<div class="left_box">
            	<div class="top_left_box">
                </div>
                <div class="center_left_box">
                	<div class="box_title"><span>Cari</span> rumah idaman Anda:</div>
                    <div class="form">
                    <div class="form_row"><label class="left">Harga: </label><input type="text" class="form_input" value="minimum"/></div>
                    <div class="form_row"><label class="left">To: </label><input type="text" class="form_input" value="maximum"/></div>
                    <div class="form_row"><label class="left">Klaster: </label><input type="text" class="form_input"/></div>
                    
                    <div ><label class="left_long">Cari untuk kategori:</label></div>
                    <div class="form_row">&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="reason"/> rumah spesial</div>
                    <div class="form_row">&nbsp;&nbsp;<input type="radio" name="reason"/> belum terjual</div>
                    <div class="form_row"><input type="radio" name="reason"/> telah terjual</div>
                    
                    <div style="float:right; padding:10px 25px 0 0;">
                    	<input type="image" src="images/find.gif"/>
                    </div>
                    
                    </div>
                
                
                </div>
                <div class="bottom_left_box">
                </div>
            </div>
            
            
 
        	<div class="left_box">
            	<div class="top_left_box">
                </div>
                <div class="center_left_box">
                	<div class="box_title"><span>Login</span> 
						
					</div>
                    
                    
                    <?php include "u_login.php" ?>
                
                
                </div>
                <div class="bottom_left_box">
                </div>
            </div> 
 
 
        	<div class="left_box">
            	<div class="top_left_box">
                </div>
                <div class="center_left_box">
                	
                <?php include "u_informasi_kontak.php" ?>
                
                </div>
                <div class="bottom_left_box">
                </div>
            </div>    
        
        </div><!-- end of column one -->
   
   	<?php
		if(!isset($_SESSION['SES_USER']) || !isset($_SESSION['SES_ADMIN'])){
			?>
			
			<div class="column2">
        	<div class="main_text_box">
            <h2>BUT Estate</h2>
            <p>
				Proyek BUT Estate dibuat untuk meningkatkan kepuasan pengguna terhadap lingkungan tempat tinggal yang dimiliki melalui 
				pemberian fasilitas sistem informasi yang lengkap, bermanfaat bagi pelanggan, serta dapat memberikan rasa aman bagi 
				pengguna. <br /><br /><p>Proyek BUT Estate ini dikembangkan oleh - <b>Firebomb Superdev Corp.</b>, 
				sehingga lisensi penuh terhadap aplikasi masih berada di tangan <b>Firebomb Superdev Corp.</b></p>          
            </p>        
        	</div>
            
        	<div class="main_text_box">
            <h2>Informasi Bantuan</h2>
            <div class="proposal">
           			<p class="proposal_text">
						Untuk informasi lebih lanjut bisa Anda lihat pada menu <b>FAQ</b>. 
					</p>
					<p class="proposal_text">Bila ada pertanyaan lebih lanjut, 
						kirimkan pertanyaan pada menu <b>Contact Us</b>.
					</p><br />
            </div>        
        	</div>            
            
            
            
            
        </div><!-- end of column two -->
   




   		<div class="column3">
		<?php
			include_once "library/inc.connection.php";
					
			$sql = "SELECT * FROM info_rumah WHERE status = 'terjual'";
			$qry = mysql_query($sql, $koneksidb)  or die ("Query salah : ".mysql_error());
			
		?>    
        	<div class="small_title">Telah Terjual</div> 
            <?php while ($row = mysql_fetch_array($qry)) { ?>
            <div class="offer_box">
            	<a href="u_hal_view_rumah.php?&amp;id_rumah=<?php echo $row['id_rumah'] ?>" target="_self" alt="View Data">
					<img align="middle" src="foto_rumah/<?php echo $row['gambar']; ?>" border="0" width="120" height="80"/>
				</a>
                <div class="offer_info">
                <span style="font-size:12px;">
					<?php echo "Tipe : ".$row['tipe']." - Klaster : ".$row['klaster']." - Harga : ".$row['harga']; ?>
				</span>
	
                <div class="more">
					<a href="u_hal_view_rumah.php?&amp;id_rumah=<?php echo $row['id_rumah'] ?>" target="_self" alt="View Data">
						<img src="images/btn_view.png" width="20" height="20"  border="0"/> More</a>
				</div>
				<p class="offer">
                	"Hunian nyaman dan damai, jauh dari kebisingan, namun tetap strategis secara geografis."            
                </p>
                </div>
            </div>
          <!--tutup kurung while--><?}?>
            
          
            
        </div><!-- end of column three -->





		<div class="column4">
        
        <div class="title">Penawaran Spesial</div> 
        <?php
			include_once "library/inc.connection.php";
					
			$sql = "SELECT * FROM info_rumah WHERE id_rumah = 'R00004'";
			$qry = mysql_query($sql, $koneksidb)  or die ("Query salah : ".mysql_error());
			
		?> 
             <div class="offer_box_wide">
			 <?php $row = mysql_fetch_array($qry); ?>
            	<a href="u_hal_view_rumah.php?&amp;id_rumah=<?php echo $row['id_rumah'] ?>" target="_self" alt="View Data">
					<img align="middle" src="foto_rumah/<?php echo $row['gambar']; ?>" border="0" width="120" height="80"/>
				</a>
                <div class="offer_info">
                <span style="font-size:12px;">
					<?php echo "Tipe : ".$row['tipe']." - Klaster : ".$row['klaster']." - Harga : ".$row['harga']; ?></span>
					<a href="u_hal_view_rumah.php?&amp;id_rumah=<?php echo $row['id_rumah'] ?>" target="_self" alt="View Data">
						<img src="images/btn_view.png" width="20" height="20"  border="0"/> More
					</a>
                <p class="offer">
                	"Segera dapatkan rumah idaman Anda."             
                </p>
               
                </div>
            </div>
            
            <?php
			include_once "library/inc.connection.php";
					
			$sql = "SELECT * FROM info_rumah WHERE id_rumah = 'R00005'";
			$qry = mysql_query($sql, $koneksidb)  or die ("Query salah : ".mysql_error());
			
			?> 
             <div class="offer_box_wide">
			 <?php $row2 = mysql_fetch_array($qry); ?>
            	<a href="u_hal_view_rumah.php?&amp;id_rumah=<?php echo $row2['id_rumah'] ?>" target="_self" alt="View Data">
					<img align="middle" src="foto_rumah/<?php echo $row2['gambar']; ?>" border="0" width="120" height="80"/>
				</a>
                <div class="offer_info">
                <span style="font-size:12px;">
					<?php echo "Tipe : ".$row2['tipe']." - Klaster : ".$row2['klaster']." - Harga : ".$row2['harga']; ?></span>
					<a href="u_hal_view_rumah.php?&amp;id_rumah=<?php echo $row2['id_rumah'] ?>" target="_self" alt="View Data">
						<img src="images/btn_view.png" width="20" height="20"  border="0"/> More
					</a>
                <p class="offer">
                	"Hunian mewah dan nyaman, jauh dari kebisingan."             
                </p>
               
                </div>
            </div>          


			<?php
			include_once "library/inc.connection.php";
					
			$sql = "SELECT * FROM info_rumah WHERE id_rumah = 'R00006'";
			$qry = mysql_query($sql, $koneksidb)  or die ("Query salah : ".mysql_error());
			
			?> 
             <div class="offer_box_wide">
			 <?php $row3 = mysql_fetch_array($qry); ?>
            	<a href="u_hal_view_rumah.php?&amp;id_rumah=<?php echo $row3['id_rumah'] ?>" target="_self" alt="View Data">
					<img align="middle" src="foto_rumah/<?php echo $row3['gambar']; ?>" border="0" width="120" height="80"/>
				</a>
                <div class="offer_info">
                <span style="font-size:12px;">
					<?php echo "Tipe : ".$row3['tipe']." - Klaster : ".$row3['klaster']." - Harga : ".$row3['harga']; ?></span>
					<a href="u_hal_view_rumah.php?&amp;id_rumah=<?php echo $row3['id_rumah'] ?>" target="_self" alt="View Data">
						<img src="images/btn_view.png" width="20" height="20"  border="0"/> More
					</a>
                <p class="offer">
                	"Cocok untuk keluarga besar."             
                </p>
               
                </div>
            </div>
            
            <?php
			include_once "library/inc.connection.php";
					
			$sql = "SELECT * FROM info_rumah WHERE id_rumah = 'R00007'";
			$qry = mysql_query($sql, $koneksidb)  or die ("Query salah : ".mysql_error());
			
			?> 
             <div class="offer_box_wide">
			 <?php $row4 = mysql_fetch_array($qry); ?>
            	<a href="u_hal_view_rumah.php?&amp;id_rumah=<?php echo $row4['id_rumah'] ?>" target="_self" alt="View Data">
					<img align="middle" src="foto_rumah/<?php echo $row4['gambar']; ?>" border="0" width="120" height="80"/>
				</a>
                <div class="offer_info">
                <span style="font-size:12px;">
					<?php echo "Tipe : ".$row4['tipe']." - Klaster : ".$row4['klaster']." - Harga : ".$row4['harga']; ?></span>
					<a href="u_hal_view_rumah.php?&amp;id_rumah=<?php echo $row4['id_rumah'] ?>" target="_self" alt="View Data">
						<img src="images/btn_view.png" width="20" height="20"  border="0"/> More
					</a>
                <p class="offer">
                	"Cocok untuk keluarga harmonis dan damai."             
                </p>
               
                </div>
            </div> 
			
			<?
		}
    ?>
   
   		




        
        </div><!-- end of column four -->	


   

	</div>
    <!-- end of main_content -->
    
<div id="footer">

	<?php include "u_footer.php" ?>

</div>


</div>
<!-- end of main_container -->

</body>
</html>