<?php
if(isset($_SESSION['SES_ADMIN'])) {
	echo "<h2 style='margin:5px 0px 5px 550px; padding:0px;'>Selamat datang ........!</h2></p>";
	echo "<b style='margin-left:570px;'> Anda login sebagai Admin<br><br><br>";
	echo "<b> Perusahaan kami menyediakan berbagai keperluan rumah tangga, antara lain sapu, sikat, alat pel, lap, tusuk sate, tusuk gigi dan lain-lain. Melayani pemesanan Retail maupun Grosir.</p><br><br>";
	echo "<p></p>";
	echo "<h1 style='margin:-5px 0px 5px 0px; padding:0px;'> -Profile Perusahaan- </h1></p>";
	echo "<b> Nama				: Tn. Suryanto Handjaja [Pemilik/Pengusaha]</p>";
	echo "<b> Email				: suryaud@hotmail.com</p>";
	echo "<b> Nomer HP			: +623417056030</p>";
	echo "<b> Nomer Telephone	: +62341726025</p>";
	echo "<b> Alamat			: Jl. Santoso No. 2 Pojok Cemoro Kandang Malang 65138 Jawa Timur - Indonesia</p>";
	echo "<b> Tanggal Bergabung		: 24 Apr. 2012</p>";
	echo "<b> Terakhir Diperbarui	: 26 Jan. 2013</p>";
	exit;
}
else if(isset($_SESSION['SES_USER'])) {
	echo "<h2 style='margin:-5px 0px 5px 0px; padding:0px;'>Selamat datang ........!</h2></p>";
	echo "<b> Anda login sebagai Kasir";
	include "login_info.php";
	exit;
}
else {
	echo "<h2 style='margin:-5px 0px 5px 0px; padding:0px;'>Selamat datang ........!</h2></p>";
	echo "<b>Anda belum login, silahkan <a href='index.php' alt='Login'>login </a>untuk mengakses sistem ini ";	
}
?>