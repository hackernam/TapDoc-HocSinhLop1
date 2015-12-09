<?php
include_once '../dataconfig/dataprovider.php';
$kiememail=$_GET["taikhoan"];

$strSQL = "SELECT * FROM taikhoan WHERE tk_TenDangNhap='".$kiememail."'";
$resu = DataProvider::ExecuteQuery($strSQL);
$record = DataProvider::ExecuteQueryArray($resu);
if($record)
{
	echo"Tài khoản đã tồn tại !";
}
else
{
	echo"&nbsp;";
}
?>