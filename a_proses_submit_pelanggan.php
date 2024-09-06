<?php
//include_once "library/inc.sesadmin.php";
include_once "library/inc.connection.php";
include_once "library/inc.library.php";
?>

<?
$id_user = buatKode("detail_akun2","U"); 
$id_rumah=$_POST['id_rumah'];
$nama_lengkap=$_POST['nama_lengkap'];
$no_ktp=$_POST['no_ktp'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$tgl_lahir=$_POST['tgl_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];

$username = $_POST['username'];
$ulangi_password = md5($_POST['ulangi_password']);

	$query1 = "INSERT INTO detail_akun2
	(id_user, 
	id_rumah, 
	nama_lengkap, 
	no_ktp, 
	alamat, 
	telp, 
	tgl_lahir, 
	jenis_kelamin) 
  	VALUES('$id_user', 
			'$id_rumah', 
			'$nama_lengkap', 
			'$no_ktp', 
			'$alamat', 
			'$telp', 
			'$tgl_lahir', 
			'$jenis_kelamin')"; 

	$query2 = "INSERT INTO akun2
	(id_user, username, password, status) 
  	VALUES('$id_user', '$username', '$ulangi_password', '2')"; 
	
	$hasil1 = mysql_query($query1); 
	$hasil2 = mysql_query($query2); 
	echo "<script>
	alert('Data sudah di submit')
	window.location='a_hal_data_pelanggan.php'
</script>";

?>