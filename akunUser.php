<?php

   $host="localhost";
   $user="root";
   $pass="";
   $db="but";
   $connect=mysql_connect($host,$user,$pass);
   mysql_select_db($db,$connect);

$id_user = $_POST['id_user']; 
$username=$_POST['username'];
$password=$_POST['password'];
$status=$_POST['status'];

	$query = "insert into akun
	(id_user, username, password, status) 
  	VALUES('$id_user', '$username', '$password', '$status')"; 

	$hasil = mysql_query($query); 
	echo "<script>
	alert('Data Berhasil Ditambhakan')
	window.location='dataAkun.php?pg=pln'
</script>";

?>
