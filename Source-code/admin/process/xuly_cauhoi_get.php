<?php
	if(isset($_GET['mode'])){
		if($_GET['mode'] == 3){
			include_once '../../dataconfig/dataprovider.php';
			$id = $_GET['id'];
			$bt = $_GET['bt'];
			$td = $_GET['td'];
			$sql = "DELETE FROM cauhoi WHERE ch_ID = $id";
			DataProvider::ExecuteQuery($sql);
			echo '<meta http-equiv="refresh" content="0;../quanly_cauhoi.php?id='.$bt.'&td='.$td.'">';
		}
	}
?>
