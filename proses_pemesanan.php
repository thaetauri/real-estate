<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="but"; // Database name 
$tbl_name="pemesanan"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$nama = $_POST['nama']; 
$alamat = $_POST['alamat'];
$telp = $_POST['telp']; 
$email = $_POST['email'];
$id_rumah = $_POST['id_rumah'];

$tgl_pesan = date("d/m/Y"); 

// Insert data into mysql 
$sql = "INSERT INTO $tbl_name
	(nama, alamat, telp, email, id_rumah, tgl_pesan) 
  	VALUES('$nama', '$alamat', '$telp', '$email', '$id_rumah', '$tgl_pesan')"; 
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
	echo "<script>
	alert('Data sudah di submit')
	window.location='u_hal_data_rumah.php'
</script>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>