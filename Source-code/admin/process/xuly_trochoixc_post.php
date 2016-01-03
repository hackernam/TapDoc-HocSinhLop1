<?php
	include_once '../../dataconfig/dataprovider.php';
	if(isset($_POST["mode"])){
		$mode = $_POST["mode"];
		$id = $_POST["id"];
		$lvl = $_POST["lvl"];
		$ha = $_POST["ha"];
		$ga = $_POST["ga"];
		$nd = $_POST["nd"];
		$kh = 1;
		$sql = $mode == 1 ? "INSERT INTO xepchu(xc_level, xc_DuongDanHinhAnh, xc_DuongDanGhiAm, xc_NoiDung, xc_Khoa) VALUES ('$lvl', '$ha', '$ga', '$nd', '$kh')"
			: "UPDATE xepchu SET xc_level = '$lvl', xc_DuongDanHinhAnh = '$ha', xc_DuongDanGhiAm = '$ga', xc_NoiDung = '$nd' WHERE xc_ID= '$id' ";
			
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
