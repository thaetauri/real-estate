<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="but"; // Database name 
$tbl_name="transaksi2"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$id_transaksi = $_POST['id_transaksi']; 
$id_user=$_POST['id_user'];
$jatuh_tempo = $_POST['jatuh_tempo']; 
$bulan2=$_POST['Bulan2'];
$tahun2=$_POST['Tahun2'];
$total_tagihan=$_POST['total_tagihan'];
$waktu_pembayaran=$_POST['waktu_pembayaran'];
$bulan=$_POST['Bulan'];
$tahun=$_POST['Tahun'];
$id_pln=$_POST['id_pln'];
$id_pdam = $_POST['id_pdam']; 
$id_telkom=$_POST['id_telkom'];

$tgl_bayar = "$waktu_pembayaran"." "."$bulan"." "."$tahun";
$tgl_tempo = "$jatuh_tempo"." "."$bulan2"." "."$tahun2";

// Insert data into mysql 
$sql = "INSERT INTO $tbl_name
	(id_transaksi, id_user, jatuh_tempo, total_tagihan, waktu_pembayaran, id_pln, id_pdam, id_telkom) 
  	VALUES('$id_transaksi', '$id_user', '$tgl_tempo', '$total_tagihan', '$tgl_bayar', '$id_pln', '$id_pdam', '$id_telkom')"; 
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='tampil_transaksi_2.php'>Tampilkan transaksi</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>