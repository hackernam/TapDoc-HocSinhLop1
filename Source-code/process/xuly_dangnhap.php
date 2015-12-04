<?php
	//include_once '../dataconfig/dataprovider.php';
	
	class xuLyDangNhap{
		var $error_message;
		function HandleError($err)
		{
			$this->error_message .= $err."\r\n";
		}
		
		function GetErrorMessage()
		{
			if(empty($this->error_message))
			{
				return '';
			}
			$errormsg = nl2br(htmlentities($this->error_message));
			return $errormsg;
		}
		
		function CheckLoginInDB($username,$password)
		{

			if (empty($username) || empty($password))
			{
				 $this->HandleError("Tên đăng nhập hoặc Mật khẩu không được để trống");
				 return false;
			}
			else
			{
				$password = md5($password);
				
				$connection = mysqli_connect("localhost","root","","tapdoc");
				//mysql_select_db("tapdoc",$connection);
				$query  = mysqli_query($connection, "SELECT * FROM taikhoan WHERE tk_TenDangNhap='$username' AND tk_MatKhau = '$password'");
				$rows = mysqli_num_rows($query);
				if($rows == 1)
				{
					$this->HandleError('ok');
					return true;
				}
				else
				{
					$this->HandleError("Tên đăng nhập hoặc Mật khẩu không hợp lệ");
				}
				mysqli_close($connection);
			}
		}
	}
?>