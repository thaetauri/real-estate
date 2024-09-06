<?php

   $host="localhost";
   $user="root";
   $pass="";
   $db="but";
   $connect=mysql_connect($host,$user,$pass);
   mysql_select_db($db,$connect);

$id_rumah = $_POST['id_rumah']; 
$alamat=$_POST['alamat'];
$type=$_POST['type'];
$klaster=$_POST['klaster'];
$luas_tanah=$_POST['luas_tanah'];
$harga=$_POST['harga'];
$id_kpr=$_POST['id_kpr'];
$status=$_POST['status'];
$kondisi = $_POST['kondisi']; 
$bulan=$_POST['bulan'];
$gambar=$_POST['gambar'];
$diskprisi=$_POST['diskripsi'];
$id_pln=$_POST['id_pln'];
$id_pdam=$_POST['id_pdam'];
$id_telkom=$_POST['id_telkom'];


	$query = "INSERT INTO detail_kepemilikan_rumah2
	(id_rumah,alamat, type,klaster, luas_tanah,harga,id_kpr, status, kondisi, bulan, gambar, diskripsi, id_pln, id_pdam, id_telkom) 
  	VALUES('$id_rumah', '$alamat', '$type', '$klaster', '$luas_tanah', '$harga', '$id_kpr', '$status','$kondisi','$bulan','$gambar','$diskripsi''$id_pln, '$id_pdam'. '$id_telkom')"; 

	$hasil = mysql_query($query); 
	echo "<script>
	alert('Data telah Ditambah')
	window.location='tampilRumah.php?pg=pln'
</script>";

?>