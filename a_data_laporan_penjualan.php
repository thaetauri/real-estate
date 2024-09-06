<!-- tampilan tabel	-->
<?php
include_once "library/inc.connection.php";
# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM laporan_penjualan2";
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
    <td bgcolor="#CCCCCC"><b>Id penjualan</b></td>
    <td bgcolor="#CCCCCC"><b>Pembeli</b> </td>  
    <td bgcolor="#CCCCCC"><strong>Tgl Penjualan</strong></td>
	<td bgcolor="#CCCCCC"><b>Id Rumah</b> </td> 
	<td bgcolor="#CCCCCC"><b>Tipe Rumah</b> </td> 
	<td bgcolor="#CCCCCC"><b>Klaster</b> </td> 
	<td bgcolor="#CCCCCC"><b>Harga</b> </td>  
  </tr>
  </tr>
<?php
	$sql = "SELECT * FROM laporan_penjualan2, info_rumah
			WHERE info_rumah.status = 'terjual'";
	//$sql = "SELECT * FROM laporan_cicilan";
	$qry = mysql_query($sql, $koneksidb)  or die ("Query salah : ".mysql_error());
	$nomor  = 0; 
	while ($row = mysql_fetch_array($qry)) {
	$nomor++;
	$Kode = $row['id_cicilan'];
?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td><?php echo $row['id_penjualan']; ?></td>
   <!-- <td><?php// echo $row['nama_lengkap']; ?></td>-->
    <td><?php echo $row['tgl_penjualan']; ?></td>
	<td><?php echo $row['id_rumah']; ?></td>
	<td><?php echo $row['tipe_rumah']; ?></td>
	<td><?php echo $row['klaster']; ?></td>
	<td><?php echo $row['harga']; ?></td>
  </tr>
  <?php } ?>
</table></td>
  </tr>
  <tr>
    <td><b>Jumlah Data :</b> <?php echo $jml; ?>&nbsp;&nbsp;&nbsp;&nbsp;<b>Halaman ke :</b> 
	<?php
	for ($h = 1; $h <= $max; $h++) {
		$list[$h] = $row * $h - $row;
		echo " <a href='a_data_laporan_cicilan.php=$list[$h]'>$h</a> ";
	}
	?>
	</td>
  </tr>
</table>