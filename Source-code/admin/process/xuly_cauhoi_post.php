<?php

	include_once '../../dataconfig/dataprovider.php';
	if(isset($_POST["mode"])){
		$mode = $_POST["mode"];
			$id = $_POST['id'];
			$td = $_POST['td'];
			$ha = $_POST['ha'];
			$ga = $_POST['ga'];
			$l1 = $_POST['l1'];
			$l2 = $_POST['l2'];
			$l3 = $_POST['l3'];
			$l4 = $_POST['l4'];
			$da = $_POST['da'];
			
		$sql = $mode == 1 ? "INSERT INTO cauhoi 
				(ch_BaiTap, ch_DuongDanHinhAnh, ch_DuongDanGhiAm, ch_LuaChon1, ch_LuaChon2, ch_LuaChon3, ch_LuaChon4, ch_DapAn) 
			VALUES
				('$td','$ha','$ga','$l1','$l2','$l3','$l4','$da')"
				: "UPDATE cauhoi
					SET ch_DuongDanHinhAnh = '$ha', ch_DuongDanGhiAm = '$ga',
						ch_LuaChon1 = '$l1', ch_LuaChon2 = '$l2', ch_LuaChon3 = '$l3',ch_LuaChon4 = '$l4', ch_DapAn = '$da'
					WHERE ch_ID= '$id' ";
			DataProvider::ExecuteQuery($sql);
			
		echo "ok with mode: ".json_encode($_POST)."<br>".$sql;
	}
	else{
		echo "This is not a POST";
	}
	
	
?>
