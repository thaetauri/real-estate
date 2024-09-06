<head>
	<!--<link href="styles/bootstrap.css" rel="stylesheet">
	<link href="styles/bootstrap-responsive.css" rel="stylesheet">-->
</head>
<?php
//include_once "library/inc.sesadmin.php";
include_once "library/inc.library.php";
include_once "library/inc.connection.php";
?>

<head>
<title>Form Tambah Rumah</title>
</head>

<table width="800" cellpadding="2" cellspacing="1" class="table-border">  
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="2">
	<form action="a_proses_submit_rumah.php" method="POST" enctype="multipart/form-data">
	<table>
	<tr>
		<? $idRumah = buatKode("info_rumah", "R"); ?>
		<td>Id Rumah</td>
		<td>:</td>
		<td><input type="text" name="id_rumah" size="8" maxlength="4" readonly="readonly" value="<?php echo $idRumah; ?>"/></td>
	</tr>
	
	<tr>
		<td>Tipe Rumah</td>
		<td>:</td>
		<td><select name="tipe">
		<option value="BLANK"></option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		</select>
		</td>
	</tr>
	
	<tr>
		<td>Klaster</td>
		<td>:</td>
		<td><input type="text" class="angka" name="klaster"></td>		
	</tr>
	
	<tr>
		<td>Luas Tanah</td>
		<td>:</td>
		<td><input type="text" class="angka" name="luas_tanah"> m2</td>		
	</tr>
	
	<tr>
		<td>Luas Bangunan</td>
		<td>:</td>
		<td><input type="text" class="angka" name="luas_bangunan"> m2</td>		
	</tr>
	
	<tr>
		<td>Jumlah Lantai</td>
		<td>:</td>
		<td><input type="text" class="angka" name="jumlah_lantai"> lantai</td>		
	</tr>
	
	<tr>
		<td>Fasilitas</td>
		<td>:</td>
		<td><textarea name="fasilitas" rows="7" cols="30"></textarea></td>		
	</tr>
	
	<tr>
		<td>Bahan Bangunan</td>
		<td>:</td>
		<td><textarea name="bahan_bangunan" rows="7" cols="30"></textarea></td>		
	</tr>
	
	<tr>
		<td>Harga</td>
		<td>:</td>
		<td><input type="text" class="angka" name="harga"></td>		
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><select name="status">
		<option value="BLANK"></option>
		<option value="terjual">terjual</option>
		<option value="belum_terjual">belum terjual</option>
		<option value="dipesan">dipesan</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>Gambar</td>
		<td>:</td>
		<td><input class="form" type="file" name="gambar" size="3000000" value="Browse"></td>
	</tr>					
</table>
	
<table width="740">
	<tr>
		<td align="right"><input name="simpan" type="submit" value="Simpan" /></td>
	</tr>
</table>

</form><br></br>

<?php if (isset($_GET['simpan'])) echo $_GET['simpan'] ?><br /><br />

</td>
  </tr>
</table>