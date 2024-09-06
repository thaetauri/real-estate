<? 
include "connect.php"; 

$id_telkom = $_POST['id_telkom']; 
$bulan=$_POST['bulan'];
$jumlah_tagihan=$_POST['jumlah_tagihan'];
$status=$_POST['status_pembayaran'];

	$query = "INSERT INTO telkom2
	(id_telkom,
	bulan, 
	tagihan_telkom, 
	status_pembayaran) 
  	VALUES('$id_telkom', '$bulan', '$jumlah_tagihan', '$status')"; 

	$hasil = mysql_query($query); 
	echo "<script>
	alert('Data sudah di submit')
	window.location='a_hal_data_telkom.php'
</script>";

?>