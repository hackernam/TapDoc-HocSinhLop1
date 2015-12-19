<?php
	include_once '../dataconfig/dataprovider.php';
	$id = $_GET['id'];
	$loai = $_GET['lb'];
	//echo $TypeBaiHoc = $_REQUEST["cbTypeBaiHoc"];
	if(isset($_REQUEST["btnEditBaiHoc"]))
  	{ 
		//<!-- file image->
		if($loai == 4){
			$nameImage = $_FILES["myfileImage"]["name"];
			$tempImage = $_FILES["myfileImage"]["tmp_name"];
			$typeImage = $_FILES["myfileImage"]["type"];
			$errorImage = $_FILES["myfileImage"]["error"];
			$tenhinhanh = $_REQUEST["txtHinhAnh"];
		}
		
		//<!-- -->
		//$myfile = $_REQUEST["myfile"];
		$name = $_FILES["myfile"]["name"];
		$temp = $_FILES["myfile"]["tmp_name"];
		$type = $_FILES["myfile"]["type"];
		$error = $_FILES["myfile"]["error"];
		//$TypeBaiHoc = $_REQUEST["cbTypeBaiHoc"];
		$tennoidung = $_REQUEST["txtTenFileBaiHoc"];
		if($loai == 1)
		{	
			if($error >0 && $name != null )
			{
				die("faile $error");
			}else{
				move_uploaded_file($temp,"../upload/GhiAm/Am/".$name);
			}
			$path = "upload/GhiAm/Am/".$name;
			$sql = "INSERT INTO am(a_NoiDung, a_DuongDanGhiAm, a_BaiHoc) 
					VALUES ('$tennoidung','$path','$id')";
			//echo $sql; exit;
			DataProvider::ExecuteQuery($sql);
			
		}else if($loai == 2)
		{	
			if($error >0 && $name != null)
			{
				die("faile $error");
			}else{
				move_uploaded_file($temp,"../upload/GhiAm/Tu/".$name);
			}
			$path = "upload/GhiAm/Tu/".$name;
			$sql = "INSERT INTO tu(t_NoiDung, t_DuongDanGhiAm, t_BaiHoc) 
					VALUES ('$tennoidung','$path','$id')";
			//echo $sql; exit;
			DataProvider::ExecuteQuery($sql);
		}else if($loai == 3)
		{	
			if($error >0 && $name != null)
			{
				die("faile $error");
			}else{
				move_uploaded_file($temp,"../upload/GhiAm/Cau/".$name);
			}
			$path = "upload/GhiAm/Cau/".$name;
			$sql = "INSERT INTO cau(t_NoiDung, t_DuongDanGhiAm, t_BaiHoc) 
					VALUES ('$tennoidung','$path','$id')";
			//echo $sql; exit;
			DataProvider::ExecuteQuery($sql);
		}else if($loai == 4)
		{	
			if($errorImage >0 && $nameImage != null )
			{
				die("faile $errorImage");
			}else{
				if($type == "image/png" || "image/jpg"){
					move_uploaded_file($tempImage,"../upload/HinhAnh/HinhAnh/".$nameImage);
					//echo "OK";
				}else{
					die("faile $errorImage");
				}
			}
			if($error >0 && $name != null )
			{
				die("faile $error");
			}else{
				if($type == "audio/mp3" || "audio/wav"){
					move_uploaded_file($temp,"../upload/GhiAm/HinhAnh/".$name);
					//echo "OK";
				}else{
					die("faile $error");
				}
				
			}
			$pathImage = "upload/HinhAnh/HinhAnh/".$nameImage;
			$path = "upload/GhiAm/HinhAnh/".$name;
			$sql = "INSERT INTO hinhanh(ha_NoiDung, ha_DuongDanHinhAnh , ha_DuongDanGhiAm, ha_BaiHoc) 
					VALUES ('$tennoidung', '$pathImage','$path','$id')";
			//echo $sql; exit;
			DataProvider::ExecuteQuery($sql);
			
		}
		
		//$solandoc = $_REQUEST["txtSoLanDoc"];
	  
		echo '<script>alert("Cập nhật thành công!")</script>';
  	}
	
?>

<a class="btn btn-primary" href="quanlytaikhoan.php">Back</a>
<?php  $result = DataProvider::GetOneRow("select * from baihoc where bh_ID = $id");?>
<form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
  <fieldset>
  <legend>Detail User</legend>
  <div class="form-group">
    <label class="col-sm-2 control-label">Tên bài học</label>
    <div class="col-sm-10">
      <input name="txtTenBaiHoc" type="text" class="form-control" required="required" disabled value="<?php echo $result[1] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Loại bài học</label>
    <div class="col-sm-10">
  <select name="cbTypeBaiHoc" class="btn btn-default dropdown-toggle" disabled style="width:50%"> 
  	 <?php
          $sql = "select * from loaibaihoc";
          $result_typeuser = DataProvider::GetRows($sql);
		  foreach($result_typeuser as $value) {
			  if($value[0] == $result[2]){
				  echo("<option value='$value[0]' selected='selected'>$value[1]</option>");
			  }else{
				  echo("<option value='$value[0]'>$value[1]</option>");
			  }
		  }
	?>
    </select>
  </div>
 </div>
 <?php if($loai == 4){
	 ?>
		<div class="form-group">
			<label class="col-sm-2 control-label">Hình ảnh</label>
			<div class="col-sm-10">
				<input name="txtHinhAnh" type="text" class="form-control">
				<input type="file" name="myfileImage">	
			</div>
		  </div>
	 <?php
 } ?>
  <div class="form-group">
    <label class="col-sm-2 control-label">File âm thanh</label>
    <div class="col-sm-10">
		<input name="txtTenFileBaiHoc" type="text" class="form-control" required="required">
		<input type='file' name='myfile'>
    </div>
  </div>
  
</fieldset>
</fieldset>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="btnEditBaiHoc" class="btn btn-primary">Save</button>
    </div>
  </div>

</form>

