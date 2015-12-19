<?php
include_once '../dataconfig/dataprovider.php';
$kiememail=$_GET["email"];

$strSQL = "SELECT * FROM taikhoan WHERE tk_TenDangNhap='".$kiememail."'";
$resu = DataProvider::ExecuteQuery($strSQL);
$record = DataProvider::ExecuteQueryArray($resu);
if($record)
{
	echo"Email đã tồn tại !";
}
else
{
	echo"&nbsp;";
}
?>