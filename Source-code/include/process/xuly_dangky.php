<?php
	include_once '../dataconfig/dataprovider.php';
	if(isset($_POST["btnRegister"]))
	{
		$username=$_POST['txtUsername'];
		$hoten=$_POST['txtHoTen'];
		$sex=$_POST['sltGioiTinh'];
		$password=$_POST['txtPassword'];
		if($sex == "Nam")
			$sex = 1;
		else 
			$sex = 2;
		$sql = "INSERT INTO `taikhoan`(`tk_HoTen`, `tk_GioiTinh`, `tk_TenDangNhap`, `tk_MatKhau`) VALUES ('$hoten',$sex,'$username','$password')";
		DataProvider::ExecuteQuery($sql);
		header('location:../dangnhap.php');
	}
?>