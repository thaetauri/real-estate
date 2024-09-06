<!-- tampilan tabel	-->
<?php
include_once "library/inc.connection.php";
# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM telkom2";
$pageQry = mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<table width="780" border="0" cellpadding="2" cellspacing="1" class="table-border">
  <tr>
    <td colspan="2"><h2><b>Tambah</b></h2><a href="a_hal_submit_telkom.php" target="_self"><img src="images/btn_add_data.png" height="25" border="0" /></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
<table class="table-list" width="670" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td width="28" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td width="160" bgcolor="#CCCCCC"><b>Id Telkom</b></td>
    <td width="260" bgcolor="#CCCCCC"><b>Bulan</b> </td>  
    <td width="100" bgcolor="#CCCCCC"><strong>Jumlah Tagihan</strong></td>
	<td width="260" bgcolor="#CCCCCC"><b>Status Pembayaran</b> </td>  
	<td width="49" align="center" bgcolor="#CCCCCC"><b>Edit</b></td>
    <td width="49" align="center" bgcolor="#CCCCCC"><b>Delete</b></td>
  </tr>
<?php
	$sql = "SELECT * FROM telkom2";
	$qry = mysql_query($sql, $koneksidb)  or die ("Query salah : ".mysql_error());
	$nomor  = 0; 
	while ($row = mysql_fetch_array($qry)) {
	$nomor++;
	$Kode = $row['id_telkom'];
?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td><?php echo $row['id_telkom']; ?></td>
    <td><?php echo $row['bulan']; ?></td>
    <td><?php echo $row['tagihan_telkom']; ?></td>
	<td><?php echo $row['status_pembayaran']; ?></td>
	<td align="center">
		<a href="edit_telkom.php?id_telkom=<?php echo $row['id_telkom'] ?>" target="_self" alt="Edit Data"><img src="images/btn_edit.png" width="20" height="20" border="0" /></a></td>
		<td><a href="delete_telkom.php?id_telkom=<?php echo $row['id_telkom'] ?>" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/btn_delete.png" width="20" height="20"  border="0"  alt="Delete Data" /></a></td>  
  </tr>
  <?php } ?>
</table></td>
  </tr>
  <tr>
    <td><b>Jumlah Data :</b> <?php echo $jml; ?>&nbsp;&nbsp;&nbsp;&nbsp;<b>Halaman ke :</b> 
	<?php
	for ($h = 1; $h <= $max; $h++) {
		$list[$h] = $row * $h - $row;
		echo " <a href='a_data_telkom.php=$list[$h]'>$h</a> ";
	}
	?>
	</td>
  </tr>
</table>