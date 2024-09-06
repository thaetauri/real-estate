<?php
//include_once "library/inc.sesadmin.php";
include_once "library/inc.connection.php";
if($_GET) {
	if(empty($_GET['id_rumah'])){
		echo "<b>Data yang dihapus tidak ada</b>";
	}
	else {
		$sqlDelete = "DELETE FROM info_rumah WHERE id_rumah='".$_GET['id_rumah']."'";
		$qryDelete = mysql_query($sqlDelete, $koneksidb) or die ("Eror hapus data".mysql_error());
		if($qryDelete){
			echo "<meta http-equiv='refresh' content='0; url=a_hal_data_rumah.php'>";
		}
	}
}
?>