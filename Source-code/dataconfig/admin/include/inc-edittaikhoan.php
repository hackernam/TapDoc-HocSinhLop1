<?php
	include_once '../dataconfig/dataprovider.php';
	$id = $_GET['id'];
	if(isset($_REQUEST["btnEditUser"]))
  	{ 
      $hoten = $_REQUEST["txtFullName"];
      $Password = $_REQUEST["txtPassword"];  

      if($_REQUEST["Gender"]=="1"){
        $Gender="1";
      }else{
        $Gender="2";
      }
      $TypeUser = $_REQUEST["cbTypeUser"];
      $sql = "UPDATE taikhoan SET tk_MatKhau = '$Password', tk_HoTen = '$hoten', tk_GioiTinh = '$Gender', tk_LoaiNguoiDung = '$TypeUser' WHERE tk_ID= '$id' ";
      DataProvider::ExecuteQuery($sql);
	  echo '<script>alert("Cập nhật thành công!")</script>';
  	}
?>
<a class="btn btn-primary" href="quanlytaikhoan.php">Back</a>
<?php  $result = DataProvider::GetOneRow("select * from taikhoan where tk_ID = $id");?>
<form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
  <fieldset>
  <legend>Detail User</legend>
  <div class="form-group">
    <label class="col-sm-2 control-label">Họ Tên</label>
    <div class="col-sm-10">
      <input name="txtFullName" type="text" class="form-control" required="required" value="<?php echo $result[1] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Tên Tài Khoản</label>
    <div class="col-sm-10">
      <input name="txtUserName" type="text" class="form-control" required="required" disabled value="<?php echo $result[3] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Mật Khẩu</label>
    <div class="col-sm-10">
      <input name="txtPassword" type="password" class="form-control" required="required" value="<?php echo $result[4] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Gender</label>
    <div class="col-sm-10">
      <div class="radio">
      <?php if($result[2] == 1){ ?>
          <label>
            <input type="radio" name="Gender" value="1" checked="true"> Nam
          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label>
            <input type="radio" name="Gender" value="2"> Nữ 
          </label>
         <?php }else{ ?>
           <label>
            <input type="radio" name="Gender" value="1"> Nam
          </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label>
            <input type="radio" name="Gender" value="2" checked="true"> Nữ 
          </label>
        <?php } ?>
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
			  if($value[0] == $result[6]){
				  echo("<option value='$value[0]' selected='selected'>$value[1]</option>");
			  }else{
				  echo("<option value='$value[0]'>$value[1]</option>");
			  }
		  }
	?>
    </select>
  </div>
 </div>
</fieldset>
</fieldset>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="btnEditUser" class="btn btn-primary">Save</button>
    </div>
  </div>

</form>

