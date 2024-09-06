<?php
//menghapus data
include('connect.php');
$id_pdam = $_GET['id_pdam'];
mysql_query("DELETE FROM pdam2 WHERE id_pdam = $id_pdam");
header('location:a_hal_data_pdam.php');

?>