<?php
$kiememail=$_GET["email"];
$connection = mysql_connect("localhost","root","");
mysql_select_db("tapdoc",$connection);
mysql_query("username 'utf8'");
$strSQL = "SELECT * FROM taikhoan WHERE tk_TenDangNhap='".$kiememail."'";
$resu = mysql_query($strSQL);
$record = mysql_fetch_array($resu);
if($record)
{
	echo"Email đã tồn tại !";
}
else
{
	echo"&nbsp;";
}
mysql_close($connection);
?>