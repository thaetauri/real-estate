<?php

include_once "library/inc.connection.php";
$id_rumah = $_GET['id_rumah']; 

$query = "SELECT id_rumah, klaster, luas_tanah, luas_bangunan, jumlah_lantai, fasilitas, 
		  bahan_bangunan, harga, status, gambar
		  FROM info_rumah WHERE id_rumah = '$id_rumah'"; 

$hasil = mysql_query($query, $koneksidb) or die ("Query salah : ".mysql_error());
$row = mysql_fetch_array($hasil); 

?>
<table class="table-list" width="670" border="0" cellspacing="1" cellpadding="2">
  <tr>
  	 <td width="120" bgcolor="#CCCCCC"><b>Foto Rumah</b> </td> 
	 <td bgcolor="#CCCCCC">:</td>
	 <td><img src="foto_rumah/<?php echo $row['gambar']; ?>" border="0"/></td>
  </tr>
  <tr>
  	 <td bgcolor="#CCCCCC"><b>Tipe Rumah</b> </td> 
	 <td bgcolor="#CCCCCC">:</td>
	 <td><?php echo $row['id_rumah']; ?></td>
  </tr>
  <tr>
  	 <td bgcolor="#CCCCCC"><b>Klaster</b> </td>
	 <td bgcolor="#CCCCCC">:</td> 
	 <td><?php echo $row['klaster']; ?></td>
  </tr>
  <tr>
  	 <td bgcolor="#CCCCCC"><b>Luas Tanah</b> </td>
	 <td bgcolor="#CCCCCC">:</td> 
	  <td><?php echo $row['luas_tanah']; ?></td>
  </tr>
  <tr>
  	 <td bgcolor="#CCCCCC"><b>Luas Bangunan</b> </td> 
	 <td bgcolor="#CCCCCC">:</td>
	  <td><?php echo $row['luas_bangunan']; ?></td>
  </tr>
  <tr>
  	 <td bgcolor="#CCCCCC"><b>Jumlah Lantai</b> </td>
	 <td bgcolor="#CCCCCC">:</td> 
	  <td><?php echo $row['jumlah_lantai']; ?></td>
  </tr>
  <tr>
  	 <td bgcolor="#CCCCCC"><b>Fasilitas</b> </td> 
	 <td bgcolor="#CCCCCC">:</td>
	  <td><?php echo $row['fasilitas']; ?></td>
  </tr>
  <tr>
  	 <td bgcolor="#CCCCCC"><b>Bahan Bangunan</b> </td>
	 <td bgcolor="#CCCCCC">:</td> 
	  <td><?php echo $row['bahan_bangunan']; ?></td>
  </tr>
  <tr>
  	 <td bgcolor="#CCCCCC"><b>Harga</b> </td> 
	 <td bgcolor="#CCCCCC">:</td>
	 <td><?php echo $row['harga']; ?></td>
  </tr>
  <tr>
  	 <td bgcolor="#CCCCCC"><b>Status</b> </td>
	 <td bgcolor="#CCCCCC">:</td> 
	 <td><?php echo $row['status']; ?></td>
  </tr>
  </table><br /><br />

<?php include "pemesanan.php"; ?>