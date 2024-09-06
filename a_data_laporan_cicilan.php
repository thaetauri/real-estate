<!-- tampilan tabel	-->
<?php
include_once "library/inc.connection.php";
# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM laporan_cicilan, detail_akun2 WHERE detail_akun2.id_user = laporan_cicilan.id_user";
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
    <td bgcolor="#CCCCCC"><b>Id Cicilan</b></td>
    <td bgcolor="#CCCCCC"><b>Nama Lengkap</b> </td>  
    <td bgcolor="#CCCCCC"><strong>Tgl Transaksi</strong></td>
	<td bgcolor="#CCCCCC"><b>Debet</b> </td> 
	<td bgcolor="#CCCCCC"><b>Kredit</b> </td> 
	<td bgcolor="#CCCCCC"><b>Total Tagihan</b> </td> 
  </tr>
  </tr>
<?php
	$sql = "SELECT * FROM laporan_cicilan, detail_akun2 WHERE detail_akun2.id_user = laporan_cicilan.id_user";
	//$sql = "SELECT * FROM laporan_cicilan";
	$qry = mysql_query($sql, $koneksidb)  or die ("Query salah : ".mysql_error());
	$nomor  = 0; 
	while ($row = mysql_fetch_array($qry)) {
	$nomor++;
	$Kode = $row['id_cicilan'];
?>
  <tr>
    <td align="center"><?php echo $nomor; ?></td>
    <td><?php echo $row['id_cicilan']; ?></td>
    <td><?php echo $row['nama_lengkap']; ?></td>
    <td><?php echo $row['tgl_transaksi']; ?></td>
	<td><?php echo $row['debet']; ?></td>
	<td><?php echo $row['kredit']; ?></td>
	<td><?php echo $row['total_tagihan']; ?></td>
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