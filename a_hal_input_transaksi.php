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
<ul>
   <li class='active '><a href='index.html'><span>Home</span></a></li>
   <li class='has-sub '><a href='#'><span>Best Recommendation</span></a></li>
   <li><a href='#'><span>About Us</span></a></li>
   <li><a href='#'><span>FAQ</span></a></li>
   <li><a href='#'><span>Contact</span></a></li>
</ul>
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
            <h2><center>Input Data Transaksi</center></h2>
            <p>
       			<?php include "input_transaksi.php"?>
            </p>        
        	</div>
		</div>
    <!-- end of main_content -->
	
<div id="footer">

	<div id="copyright">
    <div style="float:left; padding:3px;"><a href="#"><img src="images/footer_logo.gif" width="42" height="35" alt="" title="" border="0" /></a></div>
    <div style="float:left; padding:14px 10px 10px 10px;"> Company name.&copy; All Rights Reserved 2008 - By <a href="http://csscreme.com" style="color:#772c17;">csscreme</a></div>
    </div>
    
    <div id="footer2">

	</div>
	
    <ul class="footer_menu">
    	<li><a href="index.html" class="nav_footer">  Home </a></li>
        <li><a href="#" class="nav_footer">  Selling Homes </a></li>
        <li><a href="" class="nav_footer">  Buying Homes </a></li>
        <li><a href="" class="nav_footer">  Renting Homes</a></li>
        <li><a href="" class="nav_footer">  RSS </a></li>
        <li><a href="" class="nav_footer">  Contact </a></li>
    </ul>

</div>


</div>
<!-- end of main_container -->

</body>
</html>