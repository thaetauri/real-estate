<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>BuildUp Real Estate</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<link href="menu_assets/styles.css" rel="stylesheet" type="text/css">

</head>
<body>
<? include_once "library/inc.connection.php" ?>
<div id="main_container">

<div id="header">

       <div id="logo">
        <a href="index.html"></a>
       </div>
           
       <div class="banner_adds"></div>    

<div id='cssmenu'>
	<?php include "u_menu.php" ?>
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
                	<div class="box_title"><span>Login User</span> 
						
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
   
   		<div class="column4">
        
        <div class="title">Pemesanan Rumah</div> 
        	
     
        </div><!-- end of column four -->       
        
   
   		<div class="column2" style="background-color:#f3f5f6; margin-left:5px;">
        
        	<div class="big_pic"><img src="images/big_pic.jpg" width="282" height="212" alt="" title="" class="img_big_pic" /></div>
            
            <div class="pictures_thumbs">
            <h3>Pictures available:</h3>
            <a href="#"><img src="images/thumb.jpg" width="104" height="78" border="0" alt="" title="" class="img_thumb" /></a>
            <a href="#"><img src="images/thumb.jpg" width="104" height="78" border="0" alt="" title="" class="img_thumb" /></a>
            <a href="#"><img src="images/thumb.jpg" width="104" height="78" border="0" alt="" title="" class="img_thumb" /></a>
            <a href="#"><img src="images/thumb.jpg" width="104" height="78" border="0" alt="" title="" class="img_thumb" /></a>
            <a href="#"><img src="images/thumb.jpg" width="104" height="78" border="0" alt="" title="" class="img_thumb" /></a>
            <a href="#"><img src="images/thumb.jpg" width="104" height="78" border="0" alt="" title="" class="img_thumb" /></a>
            
            
            </div>
            
                  	
            
        </div><!-- end of column two -->
   




   		<div class="column3">
        
            <div class="main_text_box">
            <h1>Description</h1>
            <p>
            Tipe Rumah yang kami tawarkan adalah tipe rumah 21, 22, 29, 30, 36 dan 45 yang disesuaikan dengan permintaan konsumen kami. Luas Standar Tanah yang kami tawarkan adalah 72, namun sebagian besar memiliki kelebihan tanah sehingga menjadi 72-135.           
            </p>        
        	</div>
            
            <div class="title2">Details:</div> 
            
            <div class="details_list">
            <ul>
            	<li><span>Tipe:</span>  1 </li>
                <li><span>Cluster:</span>  A  </li>
                <li><span>Luas Tanah:</span>  340</li>
                <li><span>Luas Bangunan:</span>  300</li>
                <li><span>Jumlah Lantai:</span>  2 </li>
                <li><span>Fasilitas:</span>  langganan PDAM, langganan telepon rumah prabayar, listrik</li>
                <li><span>Bahan Bangunan:</span> <br />
				Pondasi: Batu kali, <br /> 
				Struktur : Sloof beton bertulang,<br />
				Dinding : Bata merah dan Batako <br />
				Ruang utama : Keramik <br />
				Kamar mandi : Keramik<br />
				Teras : Keramik </li>
				<li><span>Harga:</span>Rp 300.000.000,00</li>
            
            </ul>
            </div>
            
            <div style="float:left;">
            <div class="button"><a href="u_pesan.php">Pesan</a></div>
            </div>
            
            <div style="float:left; padding-left:150px;"><a href="#"><img src="images/print.gif" width="28" height="28" border="0" alt="print this offer" title="print this offer" /></a>
            
               
        </div><!-- end of column three -->


   

	</div>
    <!-- end of main_content -->
    
<div id="footer">

	<?php include "u_footer.php" ?>

</div>


</div>
<!-- end of main_container -->

</body>
</html>