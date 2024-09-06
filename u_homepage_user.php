<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>BuildUp Real Estate</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<link href="menu_assets/styles.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php  include_once "library/inc.sesadmin.php"; ?>
<div id="main_container">

<div id="header">

       <div id="logo">
        <a href="index.html"></a>
       </div>
           
       <div class="banner_adds"></div>    

<div id='cssmenu'>
<?php
	//session_start();
	if($_SESSION['status']=="1"){
		include "a_menu_login.php";
	}
	else if ($_SESSION['status']=="2"){
		include "u_menu_login.php";
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
                	<div class="box_title"><span>Find</span> your place:</div>
                    
                    
                    <div class="form">
                    <div class="form_row"><label class="left">City: </label><input type="text" class="form_input"/></div>
                    <div class="form_row"><label class="left">State: </label><input type="text" class="form_input"/></div>
                    <div class="form_row"><label class="left">Price: </label><input type="text" class="form_input" value="minimum"/></div>
                    <div class="form_row"><label class="left">To: </label><input type="text" class="form_input" value="maximum"/></div>
                    <div class="form_row"><label class="left">Rooms: </label><input type="text" class="form_input"/></div>
                    
                    <div class="form_row"><label class="left_long">Looking for to:</label></div>
                    <div class="form_row"><input type="radio" name="reason"/> sell home</div>
                    <div class="form_row"><input type="radio" name="reason"/> buy home</div>
                    <div class="form_row"><input type="radio" name="reason"/> rent home</div>
                    
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
                	
                <?php include "u_informasi_kontak.php" ?>
                
                </div>
                <div class="bottom_left_box">
                </div>
            </div>    
        
        </div><!-- end of column one -->
   
   		
	<div class="kotak_content">
        	<div class="main_text_box">
            <h1><center>Selamat Datang di Sistem Informasi BUT Estate</center></h1>
            <p>
       			<?php include "beranda.php"?>
            </p>        
        	</div>
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