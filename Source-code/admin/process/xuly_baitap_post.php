<?php
	include_once '../../dataconfig/dataprovider.php';
	if(isset($_POST["mode"])){
		$mode = $_POST["mode"];
		$td = $_POST["td"];
		$dt = date("Y-m-d h:i:s");
		$id = $_POST["id"];
		$sql = $mode == 1 ? "INSERT INTO baitap(bt_TieuDe, bt_NgayTao) VALUES ('$td', '$dt')"
			: "UPDATE baitap SET bt_TieuDe = '$td' WHERE bt_ID= '$id' ";
			
		DataProvider::ExecuteQuery($sql);
		echo $mode +" " +$sql;
	}
	else{
		echo "This is not a POST";
	}
	
	/*else if(isset($_GET['mode'])){
			DataProvider::ExecuteQuery($sql);
		include_once '../../dataconfig/dataprovider.php';
		$id = $_GET['id'];
		$sql = "DELETE FROM baitap WHERE bt_ID = $id";
		DataProvider::ExecuteQuery($sql);
		$sql = "DELETE FROM cauhoi WHERE ch_BaiTap = $id";
		DataProvider::ExecuteQuery($sql);
		echo '<meta http-equiv="refresh" content="0;../quanly_baitap.php">';
	}*/

?>
