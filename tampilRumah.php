
	<head>
		<title> Data Detail Akun </title>
	</head>
		<body>
			<br><br>
<?
	include "connect.php";
	
$query = "SELECT * FROM detail_kepemilikan_rumah2";
	$hasil = mysql_query($query);
	echo "<table border=1>"; 
	echo "
	
	
		<td><b>ID Rumah</b></td>
		<td><b>Alamat</b></td>
		<td><b>Type</b></td>
		<td><b>Klaster</b></td>
		<td><b>Luas Tanah</b></td>
		<td><b>Harga</b></td>
		<td><b>KPR</b></td>
		<td><b>Status</b></td>
		<td><b>Kondisi</b></td>
		<td><b>Bulan</b></td>
		<td><b>Gambar</b></td>
		<td><b>Diskripsi</b></td>
		<td><b>id_pln</b></td>
		<td><b>id_pdam</b></td>
		<td><b>id_telkom</b></td>
		</tr>";
		
		
		
		while ($data = mysql_fetch_array($hasil)) { 
			echo "<tr>
					<td>".$data['id_rumah']."</td>
					<td>".$data['alamat']."</td>
					<td>".$data['type']."</td>
					<td>".$data['klaster']."</td>
					<td>".$data['luas_tanah']."</td>
					<td>".$data['harga']."</td>
					<td>".$data['id_kpr']."</td>
					<td>".$data['status']."</td>
					<td>".$data['kondisi']."</td>
					<td>".$data['bulan']."</td>
					<td>".$data['gambar']."</td>
					<td>".$data['diskripsi']."</td>
					<td>".$data['id_pln']."</td>
					<td>".$data['id_pdam']."</td>
					<td>".$data['id_telkom']."</td>";
		}		
		echo "</table>";
		
		echo "<br>";
	?>
	</body>
</html>