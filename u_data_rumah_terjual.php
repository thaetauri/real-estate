<!-- tampilan tabel	-->
<? include_once "library/inc.connection.php" ?>
<table width="780" border="0" cellpadding="2" cellspacing="1" class="table-border">

  <tr>
    <td colspan="2">
<table class="table-list" width="670" border="0" cellspacing="1" cellpadding="2">
  </tr>
<?php
	$sql = "SELECT * FROM info_rumah WHERE status = 'terjual'";
	$qry = mysql_query($sql, $koneksidb)  or die ("Query salah : ".mysql_error());
	while ($row = mysql_fetch_array($qry)) {
	$nomor++;
?>
  <tr>
	<td><img src="foto_rumah/<?php echo $row['gambar']; ?>" border="0" width="122" height="82"/></td>
    <td><?php echo $row['id_rumah']; ?></td>
    <td><?php echo "Tipe : ".$row['tipe']." Harga : ".$row['harga']; ?><br />
		<a href="u_hal_view_rumah.php?&amp;id_rumah=<?php echo $row['id_rumah'] ?>" target="_self" alt="View Data"><img src="images/btn_view.png" width="20" height="20"  border="0"/>
		</a>
	</td>
  </tr>
  <?php } ?>
</table>