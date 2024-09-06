
<?php
include_once "library/inc.connection.php";
# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM detail_akun2";
$pageQry = mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>

<?	
$query = "SELECT * FROM detail_akun2";
	$hasil = mysql_query($query);
	?>
	<table width="780" border="0" cellpadding="2" cellspacing="1" class="table-border">
  		<tr>
    		<td colspan="2"><h2><b>Tambah</b></h2>
			<a href="a_hal_submit_pelanggan.php" target="_self"><img src="images/btn_add_data.png" height="25" border="0" /></a></td>
  		</tr>
  		<tr>
    		<td colspan="2">&nbsp;</td>
  		</tr>
  		<tr>
    <td colspan="2">
	<?
	echo "<table class='table-list' width=670 border=0 cellspacing=1 cellpadding=2>"; 
	echo "
		<td align='center' bgcolor='#CCCCCC'><b>No</b></td>
		<td align='center' bgcolor='#CCCCCC'><b>ID User</b></td>
		<td align='center' bgcolor='#CCCCCC'><b>ID_Rumah</b></td>
		<td align='center' bgcolor='#CCCCCC'><b>Nama Lengkap</b></td>
		<td align='center' bgcolor='#CCCCCC'><b>No_ktp</b></td>
		<td align='center' bgcolor='#CCCCCC'><b>Alamat</b></td>
		<td align='center' bgcolor='#CCCCCC'><b>Telp</b></td>
		<td align='center' bgcolor='#CCCCCC'><b>Tgl_lahir</b></td>
		<td align='center' bgcolor='#CCCCCC'><b>Jenis_kelamin</b></td>
		<td align='center' bgcolor='#CCCCCC'><b>Edit</b></td>
		<td align='center' bgcolor='#CCCCCC'><b>Delete</b></td>
		</tr>";
		
		$nomor  = 0; 
		while ($data = mysql_fetch_array($hasil)) { 
			$nomor++;
			echo "<tr>
					<td>".$nomor."</td>
					<td>".$data['id_user']."</td>
					<td>".$data['id_rumah']."</td>
					<td>".$data['nama_lengkap']."</td>
					<td>".$data['no_ktp']."</td>
					<td>".$data['alamat']."</td>
					<td>".$data['telp']."</td>
					<td>".$data['tgl_lahir']."</td>
					<td>".$data['jenis_kelamin']."</td>";
					?>
					<td align="center">
						<a href="edit_pelanggan.php?id_user=<?php echo $data['id_user'] ?>" target="_self" alt="Edit Data">
							<img src="images/btn_edit.png" width="20" height="20" border="0" />
						</a>
					</td>
					<td align="center">
						<a href="delete_pelanggan.php?&amp;id_user=<?php echo $data['id_user'] ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/btn_delete.png" width="20" height="20"  border="0"  alt="Delete Data" />
						</a>
					</td> 
  				</tr>
					<?
		}		
		echo "</table>";
	?>
	</td>
  </tr>
  <tr>
    <td><b>Jumlah Data :</b> <?php echo $jml; ?>&nbsp;&nbsp;&nbsp;&nbsp;<b>Halaman ke :</b> 
	<?php
	for ($h = 1; $h <= $max; $h++) {
		$list[$h] = $row * $h - $row;
		echo " <a href='a_data_pelanggan.php=$list[$h]'>$h</a> ";
	}
	?>
	</td>
  </tr>
</table>
