<?php
include_once "library/inc.connection.php";	

if($_GET) {
	if($_POST) {
		$message = array();
		if ( trim($_POST['username'])=="") {
			$message[] = "<b>Username </b>  tidak boleh kosong !";		
		}
		if (trim($_POST['password'])=="") {
			$message[] = "<b>Password </b> tidak boleh kosong !";		
		}
		
		# Baca variabel form
		$username 	= $_POST['username'];
		$username 	= str_replace("'","&acute;",$username);
		$password=$_POST['password'];
		$password= str_replace("'","&acute;",$password);
		
				# Jika jumlah error message tidak ada
		if(count($message)==0){	
			# LOGIN CEK KE TABEL USER LOGIN
			$loginSql = "SELECT * FROM akun WHERE username='".$username."' AND password='".md5($password)."";
			$loginQry = mysql_query($loginSql, $koneksidb)  or die ("Query Periksa Password Admin Salah : ".mysql_error());
		
			# JIKA LOGIN SUKSES
			if($loginQry){
				if (mysql_num_rows($loginQry) >=1) {
					$loginData = mysql_fetch_array($loginQry);
					// Jika yang login Administrator
					if($status=="1") {
						$_SESSION['SES_ADMIN'] = "Admin";
						$_SESSION['SES_LOGIN'] = $loginData['userid']; 
					}
					/*
					// Jika yang login Kasir
					if($status=="2") {
						$_SESSION['SES_KASIR'] = "Kasir";
						$_SESSION['SES_LOGIN'] = $loginData['userid']; 
					}
					*/
					// Refresh
					echo "<meta http-equiv='refresh' content='0; url=?page=Halaman-Utama'>";
				}
				else {
					 echo "Login Anda bukan ".$_POST['status'];
				}
			}
		}
		# Jika ada error message ditemukan
		if (! count($message)==0 ){
		?>
            <div class="mssgBox">
			<?php 
			echo "<div><img src='images/attention.png' style='margin-top:10px; margin-bottom:0px;margin-right:5px;margin-left:0px;padding:0px;float:left;'>
				  <h4 style='padding:8px 0px 0px 0px; margin-top:0px;'></h4><hr>";
				$Num=0;
				foreach ($message as $indeks=>$pesan_tampil) { 
				$Num++;
					echo "&nbsp;&nbsp;$Num. $pesan_tampil<br>";	
				} 
			echo "</div><div>&nbsp;</div>";?>
            </div>
			<?php 
		}
	}
}
?>
 
