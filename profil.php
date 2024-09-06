<?php	
include_once "library/inc.connection.php";
		$query = "SELECT * FROM akun2, detail_akun2 
				  WHERE akun2.id_user = '$_SESSION[id_user]' AND
				  detail_akun2.id_user = '$_SESSION[id_user]'"; 
				$hasil = mysql_query($query); 

					$data = mysql_fetch_array($hasil);?>
					
					<p><strong><h2>Welcome, <?php echo $_SESSION['username']; ?></h2></strong></p><br />
					<?	
						echo "<table class='table-list' width=600 border=2 cellspacing=1 cellpadding=2>"; 
						echo "<tr>";
						echo "<td bgcolor='#CCCCCC'><b>Id User</b></td><td>:</td><td>".$data['id_user']."</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td bgcolor='#CCCCCC'><b>Id Rumah</b></td><td>:</td><td>".$data['id_rumah']."</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td bgcolor='#CCCCCC'><b>Username</b></td><td>:</td><td>".$data['username']."</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td bgcolor='#CCCCCC'><b>Password</b></td><td>:</td><td>".$data['password']."&nbsp&nbsp&nbsp&nbsp(Enkripsi)</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td bgcolor='#CCCCCC'><b>Nama Lengkap</b></td><td>:</td><td>".$data['nama_lengkap']."</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td bgcolor='#CCCCCC'><b>No. KTP</b></td><td>:</td><td>".$data['no_ktp']."</td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td bgcolor='#CCCCCC'><b>Tanggal Lahir</b></td><td>:</td><td>".$data['tgl_lahir']."</td>";
						echo "</tr>";
						
						if($data['jenis_kelamin'] == "P"){
							echo "<tr>";
							echo "<td bgcolor='#CCCCCC'><b>Jenis Kelamin</b></td><td>:</td><td>Perempuan</td>";
							echo "</tr>";
						}
						else if($data['jenis_kelamin'] == "L"){
							echo "<tr>";
							echo "<td bgcolor='#CCCCCC'><b>Jenis Kelamin</b></td><td>:</td><td>Laki-laki</td>";
							echo "</tr>";
						}
						
						echo "<tr>";
						echo "<td bgcolor='#CCCCCC'><b>Telepon</b></td><td>:</td><td>".$data['telp']."</td>";
						echo "</tr>";
						
						if($data['status'] == "1"){
							echo "<tr>";
							echo "<td bgcolor='#CCCCCC'><b>Status</b></td><td>:</td><td>ADMINISTRATOR</td>";
							echo "</tr>";
						}
						else if($data['status'] == "2"){
							echo "<tr>";
							echo "<td bgcolor='#CCCCCC'><b>Status</b></td><td>:</td><td>PELANGGAN</td>";
							echo "</tr>";
						}
						echo "</table>";
					?>