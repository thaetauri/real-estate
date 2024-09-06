<?php

   $host="localhost";
   $user="root";
   $pass="";
   $db="but";
   $connect=mysql_connect($host,$user,$pass);
   mysql_select_db($db,$connect);
   
$id_user = $_POST['id_user']; 
$nama_user=$_POST['nama_user'];
$id_rumah=$_POST['id_rumah'];
$no_ktp=$_POST['no_ktp'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$tgl_lahir=$_POST['tgl_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];


	$query = "INSERT INTO detail_akun2
	(id_user,nama_user, 
	id_rumah,no_ktp, alamat, telp, tgl_lahir, jenis_kelamin) 
  	VALUES('$id_user', '$nama_user', '$id_rumah', '$no_ktp', '$alamat', '$telp', '$tgl_lahir', '$jenis_kelamin')"; 

	$hasil = mysql_query($query); 
	echo "<script>
	alert('Data sudah di submit')
	window.location='tampilAkun.php?pg=pln'
</script>";

?>