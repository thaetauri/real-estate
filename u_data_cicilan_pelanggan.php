<!-- tampilan tabel	-->
<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.connection.php";

?>
<table width="780" border="0" cellpadding="2" cellspacing="1" class="table-border">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
<table style="margin-left:90px;" class="table-list" width="480" border="2" cellspacing="1" cellpadding="2">
<?php
	$query = "SELECT * FROM laporan_cicilan, detail_akun2, akun2 
			  WHERE detail_akun2.id_user = '$_SESSION[id_user]' AND
			  laporan_cicilan.id_user = '$_SESSION[id_user]'";  
	$hasil = mysql_query($query, $koneksidb)  or die ("Query salah : ".mysql_error()); 
	$row = mysql_fetch_array($hasil);
?>
  <tr>
  	<td width="150" bgcolor="#CCCCCC"><b>Id Cicilan</b></td>
	<td>:</td>
	<td><?php echo $row['id_cicilan']; ?></td>
  </tr>
  
   <tr>
  	<td bgcolor="#CCCCCC"><b>Id User</b></td>
	<td>:</td>
	<td><?php echo $row['id_user']; ?></td>
  </tr>
  
  <tr>
  	<td bgcolor="#CCCCCC"><b>Username</b></td>
	<td>:</td>
	<td><?php echo $row['username']; ?></td>
  </tr>
  
  <tr>
  	<td bgcolor="#CCCCCC"><b>Nama Lengkap</b></td>
	<td>:</td>
	<td><?php echo $row['nama_lengkap']; ?></td>
  </tr>
  
  <tr>
  	<td bgcolor="#CCCCCC"><b>Tanggal Transaksi Terakhir</b></td>
	<td>:</td>
	<td><?php echo $row['tgl_transaksi']; ?></td>
  </tr>
  
  <tr>
  	<td bgcolor="#CCCCCC"><b>Debet</b></td>
	<td>:</td>
	<td><?php echo "Rp ".$row['debet']; ?></td>
  </tr>
  
  <tr>
  	<td bgcolor="#CCCCCC"><b>Kredit</b></td>
	<td>:</td>
	<td><?php echo "Rp ".$row['kredit']; ?></td>
  </tr>
  
  <tr>
  	<td bgcolor="#CCCCCC"></td>
	<td></td>
	<td>&nbsp;</td>
  </tr>
  
  <tr>
  	<td bgcolor="#CCCCCC"><h2>Total Tagihan</h2></td>
	<td>:</td>
	<td><h2><?php echo "Rp ".$row['total_tagihan']; ?></h2></td>
  </tr>

</table></td>
  </tr>

</table>