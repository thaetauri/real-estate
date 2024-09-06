<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 
Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html>

<body>

<table class="table-list" width="600" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td><div class="box_title"><span>Form Pemesanan Rumah</span></div></td> 
  </tr>
  <tr>
    <td>
      <table>
        <form method="post" action="proses_pemesanan.php">
        <tr>
          <td bgcolor="#CCCCCC">Nama</td>
		  <td bgcolor="#CCCCCC">:</td>
          <td><input type="text" name="nama" size="20">
          </td>
        </tr>
		<tr>
          <td bgcolor="#CCCCCC">Alamat</td>
		  <td bgcolor="#CCCCCC">:</td>
          <td><input type="text" name="alamat" size="50">
          </td>
        </tr>
		
		<tr>
          <td bgcolor="#CCCCCC">No Telp</td>
		  <td bgcolor="#CCCCCC">:</td>
          <td><input type="text" name="telp" size="20">
          </td>
        </tr>
		
		<tr>
          <td bgcolor="#CCCCCC">Email</td>
		  <td bgcolor="#CCCCCC">:</td>
          <td><input type="text" name="email" size="20">
          </td>
        </tr>
		
		<tr>
          <td bgcolor="#CCCCCC">Id Rumah yang dipesan</td>
		  <td bgcolor="#CCCCCC">:</td>
          <td><input type="text" name="id_rumah" size="20">
          </td>
        </tr>
		
		<tr>
          <td bgcolor="#CCCCCC">Keterangan</td>
		  <td bgcolor="#CCCCCC">:</td>
          <td><p>Bila dalam waktu 1 minggu tidak ada konfirmasi dari pihak pemesan ke pihak BUT Estate atau pihak pemesan tidak segera
		  	  mendatangi kantor pemesanan BUT Estate dalam kurun waktu 1 minggu, 
		      maka pihak pemesan sudah dianggap gugur dalam melakukan pemesanan rumah (data pemesanan akan dihapus oleh sistem kami).</p><br />
			  <p>Pembayaran uang muka dapat dilakukan setelah pihak pemesan melakukan konfirmasi ke kantor pemesanan secara langsung, 
			  tanpa komunikasi telpon atau internet (online).</p><br />
			  <p>Setelah melakukan konfirmasi ke kantor pemesanan, maka pihak BUT Estate dan pihak pemesan akan menandatangani surat
			  persetujuan jual beli rumah, selanjutnya pihak pemesan akan diberikan sebuah username dan password oleh admin BUT Estate
			  untuk nantinya username dan password tersebut dapat digunakan untuk account si pemilik rumah</p></td>
        </tr>
		
        <tr>
          <td></td>
		  <td></td>
          <td align="right"><input type="submit" 
          name="submit" value="Sent"></td>
        </tr>
        </table>
      </td>
    </tr>
</table>

</body>
</html>