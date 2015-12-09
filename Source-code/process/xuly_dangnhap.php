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
				 $this->HandleError("Tên đăng nhập / Mật khẩu không được để trống");
				 return -1;
			}
			else
			{
				//$password = md5($password);
				
				//$connection = mysqli_connect("localhost","root","","tapdoc");				
				//$query  = mysqli_query($connection, "SELECT * FROM taikhoan WHERE tk_TenDangNhap='$username' AND tk_MatKhau = '$password'");
				
				$sql  = "SELECT * FROM taikhoan WHERE tk_TenDangNhap='$username' AND tk_MatKhau = '$password'";
				$query  = DataProvider::ExecuteQuery($sql);
				$rows = mysqli_num_rows($query);
				
				if($rows == 1)
				{
					$id = -1;
					while ($row = $query->fetch_assoc()) {
						$id = $row["tk_ID"];
					}
					mysqli_close($connection);
				
					return $id;
				}
				else
				{
					$this->HandleError("Tên đăng nhập / Mật khẩu không hợp lệ");
				}
				mysqli_close($connection);
			}
		}
		
		function CheckLogin()
		{
			if (session_status() == PHP_SESSION_NONE) {
				session_start();
			}
			 
			if(empty($_SESSION['UID']) && empty($_SESSION['FBID']) )
			{
				return false;
			}
			 return true;
		}
		
		function RedirectToURL($url)
		{
			header("Location: $url");
			exit;
		}
	}
?>