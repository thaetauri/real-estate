<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Detail Akun</title>
</head>
<?php
include_once "library/inc.sesadmin.php";
include_once "library/inc.connection.php";
include_once "library/inc.library.php";
?>
<body>
<?php $tglLahir	= isset($_POST['cmbTanggal']) ? $_POST['cmbTanggal'] : date('d-m-Y'); ?>
				<form name="form1" method="post" action="a_proses_submit_pelanggan.php">
<table>
	<tr>
		<? $idUser = buatKode("detail_akun2", "U"); ?>
		<td>Id User</td>
		<td>:</td>
		<td><input type="text" name="id_user" size="8" maxlength="5" readonly="readonly" value="<?php echo $idUser; ?>"/></td>
	</tr>
<tr><td>Username</td><td>:</td><td><input type="text" name="username" size="30"></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="password" size="30"></td></tr>
<tr><td>Ulangi Password</td><td>:</td><td><input type="password" name="ulangi_password" size="30"></td></tr>
<tr><td>Nama Lengkap</td> <td>:</td><td><input type="text" name="nama_lengkap" size="30"></td></tr>
<tr><td>ID Rumah</td><td>:</td><td><input type="text" name="id_rumah" size="10"></td></tr>
<tr><td>NO KTP</td><td>:</td><td><input type="text" name="no_ktp" size="50"></td></tr>
<tr><td>Alamat</td><td>:</td><td><input type="text" name="alamat" size="50"></td></tr>
<tr><td>NO Telepon</td><td>:</td><td><input type="text" name="telp" size="50"></td></tr>
<tr>

      <td><b>Tanggal Lahir</b></td>
	  <td><b>:</b></td>
	   <td><input type="date" name="tgl_lahir"/></td>
	  <td><?php //echo form_tanggal("cmbTanggal",$tglLahir); ?></td>
</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><select name="jenis_kelamin">
		<option value="BLANK"></option>
		<option value="Perempuan">Perempuan</option>
		<option value="Laki-laki">Laki-laki</option>
		</select>
		</td>
	</tr>

						
						<tr><td><input value="Simpan" name="submit" type="submit" /></td></tr>
					</table>
				</form>

