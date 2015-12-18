<?php
	include_once '../dataconfig/dataprovider.php';

	if(isset($_POST["idbt"]))
	{
		
		if (session_status() == PHP_SESSION_NONE)
		{
			session_start();
		}
		$uid = $_SESSION['UID'];
		$today = date("Y-m-d h:i:s");
		$id_BT=$_POST['idbt'];
		$score=$_POST['sr'];
		
		$sqlx = "INSERT INTO `lichsubaitap`(`lsbt_TaiKhoan`, `lsbt_BaiTap`, `lsbt_NgayLam`, `lsbt_SoCauDung`, `lsbt_DiemSo`) 
			VALUES ($uid, $id_BT, '$today', $score, $score)";
		DataProvider::ExecuteQuery($sqlx);
		
		echo "Data saved";
	}
	else{
		echo "This is not a POST";
	}
?>