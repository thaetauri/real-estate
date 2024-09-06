<?php
//include_once "library/inc.sesadmin.php";
include_once "library/inc.connection.php";
if($_GET) {
	if(empty($_GET['id_user'])){
		echo "<b>Data yang dihapus tidak ada</b>";
	}
	else {
		$sqlDelete = "DELETE FROM detail_akun2, akun2 
		WHERE id_user='".$_GET['id_user']."'";
		$qryDelete = mysql_query($sqlDelete, $koneksidb) or die ("Eror hapus data".mysql_error());
		if($qryDelete){
			echo "<meta http-equiv='refresh' content='0; url=a_hal_data_pelanggan.php'>";
		}
	}
}
?>