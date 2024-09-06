<?php
session_start(); //memulai session

$username = $_POST['username'];
$password = md5($_POST['password']); 

$sql_select = "SELECT * FROM akun2 WHERE username = '$username'";
include "connect.php";
$qry = mysql_query($sql_select) or die("Query salah : " . mysql_error());
$num = mysql_num_rows($qry);
$data = mysql_fetch_array($qry);

if($num==0){
	require_once "index.php";
	echo "<h3><center>Username tidak ditemukan!</center></h3><br /><br />";
	session_destroy();
}
else{
	if($password!=$data['password']){
		require_once "index.php";
		echo "<h3><center>Password tidak sesuai!</center></h3><br />";
		session_destroy();
	}
	else{
		if ($qry !=false) {
			if ($num==1) {
				$post_username = $_POST['username'];
				$post_password = md5($_POST['password']); 
				$_SESSION['id_user'] = $data['id_user'];
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['password'] = md5($_POST['password']); 
				$_SESSION['status'] = $data['status'];
				
				include "u_homepage_user.php";
			}
		}
	}
		
}
?>
