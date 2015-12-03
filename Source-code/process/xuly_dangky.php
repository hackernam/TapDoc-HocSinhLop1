<?php
	include_once '../dataconfig/dataprovider.php';
	if(isset($_POST["btnRegister"]))
	{
		$username=$_POST['txtUsername'];
		$email=$_POST['txtEmail'];
		$sex=$_POST['sltGioiTinh'];
		$password=$_POST['txtPassword'];
		$password = md5($password);
		if($sex == "Nam")
			$sex = 1;
		else 
			$sex = 2;
		$sql = "INSERT INTO `taikhoan`(`tk_HoTen`, `tk_GioiTinh`, `tk_TenDangNhap`, `tk_MatKhau`) VALUES ('$username',$sex,'$email','$password')";
		DataProvider::ExecuteQuery($sql);
		header('location:../trangchu.php');
	}
?>