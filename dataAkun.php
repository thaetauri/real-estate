<html>
	<head>
		<title> Data Akun </title>
	</head>
		<body>
			<br><br>

<?
	include "connect.php";
	
$query = "SELECT * FROM akun2";
	$hasil = mysql_query($query);
	echo "<table class='table-list' width=680 border=2 cellspacing=1 cellpadding=2>"; 
	echo "
		<td><b>No.</b></td>
		<td><b>ID User</b></td>
		<td><b>Username</b></td>
		<td><b>Status</b></td>
		</tr>";
		$nomor = 0;
		while ($data = mysql_fetch_array($hasil)) { 
		$nomor++;
			echo "<tr>
					<td>".$nomor."</td>
					<td>".$data['id_user']."</td>
					<td>".$data['username']."</td>
					<td>".$data['status']."</td>";
					?>
 				 </tr>
				 <?			
		}		
		echo "</table>";

		echo "<br>";
	?>
	</body>
</html>