<?php
//menghapus data
include('connect.php');
$id_telkom = $_GET['id_telkom'];
mysql_query("DELETE FROM telkom2 WHERE id_telkom = $id_telkom");
header('location:a_hal_data_telkom.php');

?>