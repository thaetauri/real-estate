<? 
include_once "library/inc.library.php";
include_once "library/inc.connection.php";

$id_rumah = buatKode("info_rumah", "R");; 
$tipe = $_POST['tipe']; 
$klaster = $_POST['klaster']; 
$luas_tanah = $_POST['luas_tanah']; 
$luas_bangunan = $_POST['luas_bangunan']; 
$jumlah_lantai = $_POST['jumlah_lantai']; 
$fasilitas = $_POST['fasilitas'];
$bahan_bangunan = $_POST['bahan_bangunan'];
$harga = $_POST['harga'];
$status = $_POST['status'];
$lokasi_file = $_FILES['gambar']['tmp_name'];
$nama_file = $_FILES['gambar']['name'];

//apabila ada gambar yang akan diupload
if(!empty($lokasi_file)){
	move_uploaded_file($lokasi_file, "foto_rumah/$nama_file");
	$query = "INSERT INTO info_rumah 
  	VALUES('$id_rumah', 
			'$tipe', 
			'$klaster', 
			'$luas_tanah', 
			'$luas_bangunan',
			'$jumlah_lantai', 
			'$fasilitas',
			'$bahan_bangunan',
			'$harga',
			'$status',
			'$nama_file')"; 
$hasil = mysql_query($query); 
	echo "<script>
	alert('Data sudah di submit')
	window.location='a_hal_data_rumah.php'
</script>";
}

else{
	$query = "INSERT INTO info_rumah
	(id_rumah, 
	tipe, 
	klaster, 
	luas_tanah, 
	jumlah_lantai, 
	fasilitas, 
	bahan_bangunan, 
	harga,
	status) 
  	VALUES('$id_rumah', 
			'$tipe', 
			'$klaster', 
			'$luas_tanah', 
			'$luas_bangunan',
			'$jumlah_lantai', 
			'$fasilitas',
			'$bahan_bangunan',
			'$harga',
			'$status')"; 
$hasil = mysql_query($query); 
	echo "<script>
	alert('Data sudah di submit')
	window.location='a_hal_data_rumah.php'
</script>";
}

?>
