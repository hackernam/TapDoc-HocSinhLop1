<?php 
session_start();
session_unset();
    $_SESSION['UID'] = NULL;
    $_SESSION['FBID'] = NULL;
    $_SESSION['FULLNAME'] = NULL;
    $_SESSION['EMAIL'] =  NULL;
	$_SESSION['DaDangNhap'] = 0;
header("Location: ../index.php");        // you can enter home page here ( Eg : header("Location: " ."http://www.krizna.com"); 
?>
