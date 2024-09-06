<!-- tampilan tabel	-->
<?php
include_once "library/inc.connection.php";
# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM info_rumah";
$pageQry = mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<table width="780" border="0" cellpadding="2" cellspacing="1" class="table-border">
  <tr>
    <td colspan="2"><h2><b>Tambah</b></h2><a href="a_hal_submit_rumah.php" target="_self"><img src="images/btn_add_data.png" height="25" border="0" /></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
<table class="table-list" width="670" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td width="28" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td bgcolor="#CCCCCC"><b>Id Rumah</b></td>
    <td bgcolor="#CCCCCC"><b>Tipe Rumah</b> </td>  
    <td bgcolor="#CCCCCC"><strong>Klaster</strong></td>
	<td bgcolor="#CCCCCC"><b>Status</b> </td> 
	<td bgcolor="#CCCCCC"><b>Harga</b> </td> 
	<td width="49" align="center" bgcolor="#CCCCCC"><b>Edit</b></td>
    <td width="49" align="center" bgcolor="#CCCCCC"><b>Delete</b></td>
	<td width="49" align="center" bgcolor="#CCCCCC"><b>View</b></td>
  </tr>
  </tr>
<?php
	$sql = "SELECT * FROM info_rumah";
	$qry = mysql_query($sql, $koneksidb)  or die ("Query salah : ".mysql_error());
	$nomor  = 0; 
	while ($row = mysql_fetch_array($qry)) {
	$nomor++;
	$Kode = $row['id_rumah'];
?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td><?php echo $row['id_rumah']; ?></td>
    <td><?php echo $row['tipe']; ?></td>
    <td><?php echo $row['klaster']; ?></td>
	<td><?php echo $row['status']; ?></td>
	<td><?php echo $row['harga']; ?></td>
	<td align="center">
		<a href="edit_telkom.php?id_rumah=<?php echo $row['id_rumah'] ?>" target="_self" alt="Edit Data"><img src="images/btn_edit.png" width="20" height="20" border="0" />
		</a>
	</td>
	<td align="center">
		<a href="delete_rumah.php?&amp;id_rumah=<?php echo $row['id_rumah'] ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/btn_delete.png" width="20" height="20"  border="0"  alt="Delete Data" />
		</a>
	</td> 
	<td align="center">
		<a href="a_hal_view_rumah.php?&amp;id_rumah=<?php echo $row['id_rumah'] ?>" target="_self" alt="View Data"><img src="images/btn_view.png" width="20" height="20"  border="0"/>
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
		echo " <a href='a_data_rumah.php=$list[$h]'>$h</a> ";
	}
	?>
	</td>
  </tr>
</table>