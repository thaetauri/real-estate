
	<head>
		<title> Data Detail Akun </title>
	</head>
		<body>
			<br><br>
<?
	include "connect.php";
	
$query = "SELECT * FROM detail_akun2";
	$hasil = mysql_query($query);
	echo "<table border=1>"; 
	echo "
		<td><b>ID User</b></td>
		<td><b>ID_Rumah</b></td>
		<td><b>Nama Lengkap</b></td>
		<td><b>No_ktp</b></td>
		<td><b>Alamat</b></td>
		<td><b>Telp</b></td>
		<td><b>Tgl_lahir</b></td>
		<td><b>Jenis_kelamin</b></td>
		</tr>";
		
		
		
		while ($data = mysql_fetch_array($hasil)) { 
			echo "<tr>
					<td>".$data['id_user']."</td>
					<td>".$data['id_rumah']."</td>
					<td>".$data['nama_lengkap']."</td>
					<td>".$data['no_ktp']."</td>
					<td>".$data['alamat']."</td>
					<td>".$data['telp']."</td>
					<td>".$data['tgl_lahir']."</td>
					<td>".$data['jenis_kelamin']."</td>";
		}		
		echo "</table>";
		
		echo "<br>";
	?>
	</body>
</html>