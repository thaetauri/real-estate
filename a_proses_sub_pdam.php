<? 
include "connect.php"; 

$id_pdam = $_POST['id_pdam']; 
$bulan=$_POST['bulan'];
$jumlah_tagihan=$_POST['jumlah_tagihan'];
$status=$_POST['status_pembayaran'];

	$query = "INSERT INTO pdam2
	(id_pdam, 
	bulan, 
	tagihan_pdam, 
	status_pembayaran) 
  	VALUES('$id_pdam', '$bulan', '$jumlah_tagihan', '$status')"; 

	$hasil = mysql_query($query); 
	echo "<script>
	alert('Data sudah di submit')
	window.location='a_hal_data_pdam.php'
</script>";

?>
