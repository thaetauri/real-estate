<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>BuildUp Real Estate</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<link href="menu_assets/styles.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php include_once "library/inc.sesadmin.php"; ?>
<div id="main_container">

<div id="header">

       <div id="logo">
        <a href="index.html"></a>
       </div>
           
       <div class="banner_adds"></div>    

<div id='cssmenu'>
	<? include "a_menu_login.php" ?>
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
                    
                 	<?php include "u_home_user.php" ?>
                </div>
                <div class="bottom_left_box">
                </div>
            </div>  
 
 
        	<div class="left_box">
            	<div class="top_left_box">
                </div>
                <div class="center_left_box">
                	<div class="box_title"><span>Contact</span> information:</div>
                    
                    
                    <div class="form">
                    <div class="form_row">
                    	<img src="images/contact_envelope.gif" width="50" height="47" border="0" class="img_right" alt="" title="" />
                        <div class="contact_information">
                        Email: butestate@yahoo.com<br />
                        Telephone: 0341 789 90<br />
                        Mobile:      +62 82139026952<br />
                        Fax:         34534 3456 3456(54)<br /><br />
                        
                        <span>www.butestate.com</span>
                        </div>
                    </div>                    
                    </div>
                
                
                </div>
                <div class="bottom_left_box">
                </div>
            </div>  

        </div><!-- end of column one -->
		
		</div><!-- end of column one -->
   
   		<div class="kotak_content">
        	<div class="main_text_box">
        		<h1><center>Data Pemesanan Rumah</center></h1>
                <?php include "a_data_pemesanan.php" ?>  
        	</div>
		</div>
    <!-- end of main_content -->
	
<div id="footer">

	<?php include "u_footer.php" ?>

</div>


</div>
<!-- end of main_container -->

</body>
</html>