<!-- tampilan tabel	-->
<?php
# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM 2_belah";
$pageQry = mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<table width="800" border="0" cellpadding="2" cellspacing="1" class="table-border">
  <tr>
    <td colspan="2" align="center"><h1><b>DATA INFORMASI CICILAN</b></h1></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
<table class="table-list" width="740" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td width="28" align="center" bgcolor="#CCCCCC"><b>No</b></td>
    <td width="160" bgcolor="#CCCCCC"><b>Id Belah</b></td>
    <td width="260" bgcolor="#CCCCCC"><b>Nama Pemilik</b> </td>  
    <td width="100" bgcolor="#CCCCCC"><strong>Nama Pegawai</strong></td>
	<td width="260" bgcolor="#CCCCCC"><b>Tanggal Belah</b> </td>  
	<td width="80" bgcolor="#CCCCCC"><b>Shift</b> </td>  
	<td width="195" bgcolor="#CCCCCC"><strong>Total Jumlah (Ros)</strong></td>
	<td width="195" bgcolor="#CCCCCC"><strong>Total Berat Akhir (kg)</strong></td>
	<td width="49" align="center" bgcolor="#CCCCCC"><b>Edit</b></td>
    <td width="49" align="center" bgcolor="#CCCCCC"><b>Delete</b></td>
  </tr>
<?php
	$sql = "SELECT * FROM 2_belah, data_pegawai, supplier
	          WHERE data_pegawai.id = 2_belah.id_pegawai AND 2_belah.id_supplier = supplier.kd_supplier
			  GROUP BY id_belah";
	$qry = mysql_query($sql, $koneksidb)  or die ("Query supplier salah : ".mysql_error());
	$nomor  = 0; 
	while ($row = mysql_fetch_array($qry)) {
	$nomor++;
	$Kode = $row['id_belah'];
?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td><?php echo $row['id_belah']; ?></td>
    <td><?php echo $row['nm_supplier']; ?></td>
    <td><?php echo $row['nama_pegawai']; ?></td>
	<td><?php echo IndonesiaTgl($row['tgl_belah']); ?></td>
	<td><?php echo $row['shift']; ?></td>
	<td><?php echo $row['total_ros']; ?></td>
	<td><?php echo $row['total_kg']; ?></td> 
	<td align="center"><a href="?page=Edit-Belah&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Edit Data"><img src="images/btn_edit.png" width="20" height="20" border="0" /></a></td>
        <td align="center"><a href="?page=Delete-Belah&amp;Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/btn_delete.png" width="20" height="20"  border="0"  alt="Delete Data" /></a></td>  
  </tr>
  <?php } ?>
</table></td>
  </tr>
  <tr>
    <td><b>Jumlah Data :</b> <?php echo $jml; ?>&nbsp;&nbsp;&nbsp;&nbsp;<b>Halaman ke : </b> 
	<?php
	for ($h = 1; $h <= $max; $h++) {
		$list[$h] = $row * $h - $row;
		echo " <a href='?page=Data-Belah&hal=$list[$h]'>$h</a> ";
	}
	?>
	</td>
  </tr>
</table>