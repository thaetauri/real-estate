<!-- tampilan tabel	-->
<?php
include_once "library/inc.connection.php";
# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM pemesanan";
$pageQry = mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<table width="780" border="0" cellpadding="2" cellspacing="1" class="table-border">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
<table class="table-list" width="670" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td width="28" align="center" bgcolor="#CCCCCC"><b>No</b></td>
	<td bgcolor="#CCCCCC"><b>Id Pesan</b></td>
    <td bgcolor="#CCCCCC"><b>Tgl Pesan</b></td>
    <td bgcolor="#CCCCCC"><b>Nama</b> </td>  
    <td bgcolor="#CCCCCC"><strong>Alamat</strong></td>
	<td bgcolor="#CCCCCC"><b>Telepon</b> </td> 
	<td bgcolor="#CCCCCC"><b>Email</b> </td> 
	<td bgcolor="#CCCCCC"><b>Id_Rumah</b> </td> 
    <td width="49" align="center" bgcolor="#CCCCCC"><b>Delete</b></td>
  </tr>
  </tr>
<?php
	$sql = "SELECT * FROM pemesanan";
	$qry = mysql_query($sql, $koneksidb)  or die ("Query salah : ".mysql_error());
	$nomor  = 0; 
	while ($row = mysql_fetch_array($qry)) {
	$nomor++;
?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td><?php echo $row['no']; ?></td>
    <td><?php echo $row['tgl_pesan']; ?></td>
    <td><?php echo $row['nama']; ?></td>
	<td><?php echo $row['alamat']; ?></td>
	<td><?php echo $row['telp']; ?></td>
	<td><?php echo $row['email']; ?></td>
	<td><?php echo $row['id_rumah']; ?></td>
	<td align="center">
		<a href="delete_pemesanan.php?&amp;no=<?php echo $row['no'] ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/btn_delete.png" width="20" height="20"  border="0"  alt="Delete Data" />
		</a>
	</td> 
  </tr>
  <?php } ?>
</table></td>
  </tr>
  <tr>
    <td><b>Jumlah Data :</b> <?php echo $jml; ?>&nbsp;&nbsp;&nbsp;&nbsp;<b>Halaman ke :</b> 
	<?php
	for ($h = 1; $h <= $max; $h++) {
		$list[$h] = $row * $h - $row;
		echo " <a href='a_hal_data_pemesanan.php=$list[$h]'>$h</a> ";
	}
	?>
	</td>
  </tr>
</table>