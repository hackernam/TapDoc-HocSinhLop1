<?php
	include_once '../dataconfig/dataprovider.php';
	$id = $_GET['id'];
	$loai = $_GET['lb'];
	$sluong = $_GET['ls'];
	//echo $TypeBaiHoc = $_REQUEST["cbTypeBaiHoc"];
	if(isset($_REQUEST["btnEditBaiHoc"]))
  	{
		if($loai == 1)
		{
			$a_id = "select * from am where a_BaiHoc = '$id'";
			$temp = DataProvider::GetRows($a_id);
			
			foreach($temp as $v1){
				$name = $_FILES["myfile"]["name"][$v1[0]];
				$temp = $_FILES["myfile"]["tmp_name"][$v1[0]];
				$type = $_FILES["myfile"]["type"][$v1[0]];
				$error = $_FILES["myfile"]["error"][$v1[0]];
				//$TypeBaiHoc = $_REQUEST["cbTypeBaiHoc"];
				$tennoidung = $_REQUEST["txtTenFileBaiHoc"][$v1[0]];
				//echo $tennoidung;
					
					if($error >0 && $name != null )
					{
						die("faile $error");
					}else{
						move_uploaded_file($temp,"../upload/GhiAm/Am/".$name);
					}
					if($name !=null){
						$path = "upload/GhiAm/Am/".$name;
						$sql = "UPDATE am SET a_NoiDung = '$tennoidung', a_DuongDanGhiAm = '$path' where a_ID = '$v1[0]'";
					}else{
						$sql = "UPDATE am SET a_NoiDung = '$tennoidung' where a_ID = '$v1[0]'";
					}
					
					DataProvider::ExecuteQuery($sql);
				}
			echo '<script>alert("Cập nhật thành công!")</script>';
		}
			else if($loai == 2)
		{
			$a_id = "select * from tu where t_BaiHoc = '$id'";
			$temp = DataProvider::GetRows($a_id);
			
			foreach($temp as $v1){
				$name = $_FILES["myfile"]["name"][$v1[0]];
				$temp = $_FILES["myfile"]["tmp_name"][$v1[0]];
				$type = $_FILES["myfile"]["type"][$v1[0]];
				$error = $_FILES["myfile"]["error"][$v1[0]];
				//$TypeBaiHoc = $_REQUEST["cbTypeBaiHoc"];
				$tennoidung = $_REQUEST["txtTenFileBaiHoc"][$v1[0]];
				//echo $tennoidung;
					
					if($error >0 && $name != null )
					{
						die("faile $error");
					}else{
						move_uploaded_file($temp,"../upload/GhiAm/Tu/".$name);
					}
					if($name !=null){
						$path = "upload/GhiAm/Tu/".$name;
						$sql = "UPDATE tu SET t_NoiDung = '$tennoidung', t_DuongDanGhiAm = '$path' where t_ID = '$v1[0]'";
					}else{
						$sql = "UPDATE tu SET t_NoiDung = '$tennoidung' where t_ID = '$v1[0]'";
					}
					
					DataProvider::ExecuteQuery($sql);
				}
				echo '<script>alert("Cập nhật thành công!")</script>';
		}else if($loai == 3)
		{
			$a_id = "select * from cau where c_BaiHoc = '$id'";
			$temp = DataProvider::GetRows($a_id);
			
			foreach($temp as $v1){
				$name = $_FILES["myfile"]["name"][$v1[0]];
				$temp = $_FILES["myfile"]["tmp_name"][$v1[0]];
				$type = $_FILES["myfile"]["type"][$v1[0]];
				$error = $_FILES["myfile"]["error"][$v1[0]];
				//$TypeBaiHoc = $_REQUEST["cbTypeBaiHoc"];
				$tennoidung = $_REQUEST["txtTenFileBaiHoc"][$v1[0]];
				//echo $tennoidung;
					
					if($error >0 && $name != null )
					{
						die("faile $error");
					}else{
						move_uploaded_file($temp,"../upload/GhiAm/Cau/".$name);
					}
					if($name !=null){
						$path = "upload/GhiAm/Cau/".$name;
						$sql = "UPDATE cau SET c_NoiDung = '$tennoidung', c_DuongDanGhiAm = '$path' where c_ID = '$v1[0]'";
					}else{
						$sql = "UPDATE cau SET c_NoiDung = '$tennoidung' where c_ID = '$v1[0]'";
					}
					
					DataProvider::ExecuteQuery($sql);
				}
				echo '<script>alert("Cập nhật thành công!")</script>';
		}else if($loai == 4)
		{
			$a_id = "select * from hinhanh where ha_BaiHoc = '$id'";
			$temp = DataProvider::GetRows($a_id);
			
			foreach($temp as $v1){
				$nameImage = $_FILES["myfileImage"]["name"][$v1[0]];
				$tempImage = $_FILES["myfileImage"]["tmp_name"][$v1[0]];
				$typeImage = $_FILES["myfileImage"]["type"][$v1[0]];
				$errorImage = $_FILES["myfileImage"]["error"][$v1[0]];
				$tenhinhanh = $_REQUEST["txtHinhAnh"][$v1[0]];
				$nameAu = $_FILES["myfile"]["name"][$v1[0]];
				$tempAu = $_FILES["myfile"]["tmp_name"][$v1[0]];
				$type = $_FILES["myfile"]["type"][$v1[0]];
				$error = $_FILES["myfile"]["error"][$v1[0]];
				//$TypeBaiHoc = $_REQUEST["cbTypeBaiHoc"];
				$tennoidung = $_REQUEST["txtTenFileBaiHoc"][$v1[0]];
				//echo $tempAu;exit;
				//echo $tennoidung;
					
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
					if($error >0 && $nameAu != null )
					{
						die("faile $error");
					}else{
						//echo $tempAu;exit;
						move_uploaded_file($tempAu,"../upload/GhiAm/Hinh/".$nameAu);
						
					}
					if($nameAu !=null && $nameImage != null){
						$pathImage = "upload/HinhAnh/HinhAnh/".$nameImage;
						$path = "upload/GhiAm/Hinh/".$name;
						$sql = "UPDATE hinhanh SET ha_NoiDung = '$tennoidung', ha_DuongDanGhiAm = '$path', ha_DuongDanHinhAnh = '$pathImage'
						where ha_ID = '$v1[0]'";
					}else if($nameAu !=null){
						$path = "upload/GhiAm/Hinh/".$nameAu;
						$sql = "UPDATE hinhanh SET ha_NoiDung = '$tennoidung', ha_DuongDanGhiAm = '$path'
						where ha_ID = '$v1[0]'";
					}else if($nameImage !=null){
						$pathImage = "upload/HinhAnh/HinhAnh/".$nameImage;
						$sql = "UPDATE hinhanh SET ha_NoiDung = '$tennoidung', ha_DuongDanHinhAnh = '$pathImage'
						where ha_ID = '$v1[0]'";
					}
					else{
						$sql = "UPDATE hinhanh SET ha_NoiDung = '$tennoidung' where ha_ID = '$v1[0]'";
					}
					
					DataProvider::ExecuteQuery($sql);
				}
				echo '<script>alert("Cập nhật thành công!")</script>';
		}
		}
		//$solandoc = $_REQUEST["txtSoLanDoc"];
	  
		
  	
	
?>

<a class="btn btn-primary" href="quanlytaikhoan.php">Back</a>
<?php  $result = DataProvider::GetOneRow("select * from baihoc where bh_ID = $id");?>
<form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
  <fieldset>
	  <legend>Sửa các bài học</legend>
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
		
		<?php 
			if($loai == 1){
				$listBH = "select * from am";
				$result_listBH = DataProvider::GetRows($listBH);
				foreach($result_listBH as $value) {
					?>
						<div class="form-group">
							<label class="col-sm-2 control-label">File âm thanh</label>
							<div class="col-sm-10">
								<input name="txtTenFileBaiHoc[<?php echo $value[0] ?>]" type="text" class="form-control" required="required" value="<?php echo $value[1]?>">
								<input type="file" name="myfile[<?php echo $value[0] ?>]">
							</div>
						</div>
					<?php
				}
			}else if($loai == 2){
				$listBH = "select * from tu";
				$result_listBH = DataProvider::GetRows($listBH);
				foreach($result_listBH as $value) {
					?>
						<div class="form-group">
							<label class="col-sm-2 control-label">File âm thanh</label>
							<div class="col-sm-10">
								<input name="txtTenFileBaiHoc[<?php echo $value[0] ?>]" type="text" class="form-control" required="required" value="<?php echo $value[1]?>">
								<input type="file" name="myfile[<?php echo $value[0] ?>]">
							</div>
						</div>
					<?php
				}
			}else if($loai == 3){
				$listBH = "select * from cau";
				$result_listBH = DataProvider::GetRows($listBH);
				foreach($result_listBH as $value) {
					?>
						<div class="form-group">
							<label class="col-sm-2 control-label">File âm thanh</label>
							<div class="col-sm-10">
								<input name="txtTenFileBaiHoc[<?php echo $value[0] ?>]" type="text" class="form-control" required="required" value="<?php echo $value[1]?>">
								<input type="file" name="myfile[<?php echo $value[0] ?>]">
							</div>
						</div>
					<?php
				}
			}
			else if($loai == 4){
				$listBH = "select * from hinhanh";
				$result_listBH = DataProvider::GetRows($listBH);
				foreach($result_listBH as $value) {
					?>
						<div class="form-group">
							<label class="col-sm-2 control-label">Hình ảnh</label>
							<div class="col-sm-10">
							<img src="../<?php echo $value[2] ?>"/>
								<input name="txtHinhAnh[<?php echo $value[0] ?>]" type="hidden" class="form-control" value="<?php echo $value[1]?>">
								<input type="file" name="myfileImage[<?php echo $value[0] ?>]">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">File âm thanh</label>
							<div class="col-sm-10">
								<input name="txtTenFileBaiHoc[<?php echo $value[0] ?>]" type="text" class="form-control" required="required" value="<?php echo $value[1]?>">
								<input type="file" name="myfile[<?php echo $value[0] ?>]">
							</div>
						</div>
					<?php
				}
			}
		?>
		
	</fieldset>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" name="btnEditBaiHoc" class="btn btn-primary">Save</button>
		</div>
	</div
</form>