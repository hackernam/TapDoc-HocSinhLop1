<?php
	include_once '../../dataconfig/dataprovider.php';
	
	if(isset($_GET['mode'])){
		include_once '../../dataconfig/dataprovider.php';
		$id = $_GET['id'];
		$sql = "DELETE FROM baitap WHERE bt_ID = $id";
		DataProvider::ExecuteQuery($sql);
		$sql = "DELETE FROM cauhoi WHERE ch_BaiTap = $id";
		DataProvider::ExecuteQuery($sql);
		echo '<meta http-equiv="refresh" content="0;../quanly_baitap.php">';
	}

?>
