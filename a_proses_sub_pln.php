<? 
include "connect.php"; 

$id_pln = $_POST['id_pln']; 
$bulan=$_POST['bulan'];
$jumlah_tagihan=$_POST['jumlah_tagihan'];
$status=$_POST['status_pembayaran'];

	$query = "INSERT INTO pln2
	(id_pln, 
	bulan, 
	tagihan_pln, 
	status_pembayaran) 
  	VALUES('$id_pln', '$bulan', '$jumlah_tagihan', '$status')"; 

	$hasil = mysql_query($query); 
	echo "<script>
	alert('Data sudah di submit')
	window.location='a_hal_data_pln.php'
</script>";

?>
