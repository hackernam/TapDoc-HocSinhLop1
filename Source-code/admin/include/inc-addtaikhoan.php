<script language="javascript">	
    function kiemtrataikhoan(){
		myFrmObj = document.DKUser;
		if(myFrmObj.txtUserName.value.length < 6){
			document.getElementById("result").innerHTML = "Tên tài khoản phải hơn 6 kí tự";
			return false;
		}else{
			document.getElementById("result").innerHTML = "&nbsp;";
		}
		return true;
	}
	function kiemtramatkhau(){
		myFrmObj = document.DKUser;
		if(myFrmObj.txtPassword.value.length < 6){
			document.getElementById("result").innerHTML = "Mật khẩu phải hơn 6 kí tự";
			return false;
		}else{
			document.getElementById("result").innerHTML = "&nbsp;";
		}
		return true;
	}
	function Kiemtralai(){
		myFrmObj = document.DKUser;
		if(myFrmObj.txtUserName.value.length < 6){
			document.getElementById("result").innerHTML = "Tên tài khoản phải hơn 6 kí tự";
			return false;
		}
		if(myFrmObj.txtPassword.value.length < 6){
			document.getElementById("result").innerHTML = "Mật khẩu phải hơn 6 kí tự";
			return false;
		}
		return true;
	}
</script>
<?php
	include_once '../dataconfig/dataprovider.php';
	if(isset($_REQUEST["btnAddUser"]))
  	{ 
      $hoten = $_REQUEST["txtFullName"];
	  $tentaikhoan = $_REQUEST["txtUserName"];	 
      $Password = $_REQUEST["txtPassword"];  

      if($_REQUEST["Gender"]=="1"){
        $Gender="1";
      }else{
        $Gender="2";
      }
      $TypeUser = $_REQUEST["cbTypeUser"];
      $sql = "INSERT INTO taikhoan(tk_HoTen, tk_GioiTinh, tk_TenDangNhap, tk_MatKhau, tk_DangNhapLanCuoi, tk_LoaiNguoiDung) 
	  VALUES ('$hoten',$Gender,'$tentaikhoan','$Password','0000-00-00 00:00:00',$TypeUser)";
      DataProvider::ExecuteQuery($sql);
	  echo '<script>alert("Thêm tài khoản thành công!")</script>';
  	}
?>

<a class="btn btn-primary" href="quanlytaikhoan.php">Back</a>
<div id="result" style="color:#F00; font-weight:bold">&nbsp;</div>
<form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data" name="DKUser" onsubmit="return Kiemtralai()">
  <fieldset>
  <legend>Detail User</legend>
  <div class="form-group">
    <label class="col-sm-2 control-label">Họ Tên</label>
    <div class="col-sm-10">
      <input name="txtFullName" id="txtFullName" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Tên Tài Khoản</label>
    <div class="col-sm-10">
      <input name="txtUserName" id="txtUserName" type="text" class="form-control" required="required" onkeyup="kiemtrataikhoan()">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Mật Khẩu</label>
    <div class="col-sm-10">
      <input name="txtPassword" id="txtPassword" type="password" class="form-control" required="required" onkeyup="kiemtramatkhau()">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Gender</label>
    <div class="col-sm-10">
      <div class="radio">
          <label>
            <input type="radio" name="Gender" value="1" checked="true"> Nam
          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label>
            <input type="radio" name="Gender" value="2"> Nữ 
          </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Loại tài khoản</label>
    <div class="col-sm-10">
  <select name="cbTypeUser" class="btn btn-default dropdown-toggle" style="width:50%"> 
  	 <?php
          $sql = "select * from loainguoidung";
          $result_typeuser = DataProvider::GetRows($sql);
		  foreach($result_typeuser as $value) {
		  	  echo("<option value='$value[0]'>$value[1]</option>");
		  }
	?>
    </select>
  </div>
 </div>
</fieldset>
</fieldset>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="btnAddUser" class="btn btn-primary">Save</button>
    </div>
  </div>

</form>

