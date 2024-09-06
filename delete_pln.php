<?php
//menghapus data
include('connect.php');
$id_pln = $_GET['id_pln'];
mysql_query("DELETE FROM pln2 WHERE id_pln = $id_pln");
header('location:a_hal_data_pln.php');

?>