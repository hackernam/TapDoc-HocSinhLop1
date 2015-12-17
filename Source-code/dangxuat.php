<?php 
session_start();
session_unset();
    $_SESSION['UID'] = NULL;
	$_SESSION['DaDangNhap'] = 0;
header("Location: index.php");
?>