<?php
// *** Logout the current user.
$logoutGoTo = "index.php";
if (!isset($_SESSION)) {
  session_start();
}
$_SESSION['username'] = NULL;
$_SESSION['password'] = NULL;
unset($_SESSION['username']);
unset($_SESSION['password']);
if ($logoutGoTo != "") {header("Location: $logoutGoTo");
exit;
}



/*session_start();

session_destroy();

?>
<script>alert("Logout Sukses!");
document.location.href="../admin"
</script>
<?
include "index.html"; */
?>