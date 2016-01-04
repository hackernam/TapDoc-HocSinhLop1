<?php

	include_once '../dataconfig/dataprovider.php';
	$id = $_GET['id'];
	$loai = $_GET['lb'];
	$get_lbh = $_GET['lbh'];
	//echo $TypeBaiHoc = $_REQUEST["cbTypeBaiHoc"];
	if(isset($_REQUEST["btnEditBaiHoc"]))
  	{ 
		$quantity = $_REQUEST['cbQuantityBaiHoc'];
		for ($i = 0; $i < $quantity; $i++) {
			//<!-- file image->
			if($loai == 4){
				$nameImage = $_FILES["myfileImage"]["name"][$i];
				$tempImage = $_FILES["myfileImage"]["tmp_name"][$i];
				$typeImage = $_FILES["myfileImage"]["type"][$i];
				$errorImage = $_FILES["myfileImage"]["error"][$i];
				$tenhinhanh = $_REQUEST["txtHinhAnh"][$i];
			}
			
			//<!-- -->
			//$myfile = $_REQUEST["myfile"];
			$name = $_FILES["myfile"]["name"][$i];
			$temp = $_FILES["myfile"]["tmp_name"][$i];
			$type = $_FILES["myfile"]["type"][$i];
			$error = $_FILES["myfile"]["error"][$i];
			//$TypeBaiHoc = $_REQUEST["cbTypeBaiHoc"];
			$tennoidung = $_REQUEST["txtTenFileBaiHoc"][$i];
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
		}
		//$solandoc = $_REQUEST["txtSoLanDoc"];
	  
		echo '<script>alert("Cập nhật thành công!")</script>';
  	}
	
?>

<a class="btn btn-primary" href="quanlybaihoc.php">Quay lại</a>
<?php  $result = DataProvider::GetOneRow("select * from baihoc where bh_ID = $id");?>
<form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
  <fieldset>
	  <legend>Xóa các bài học</legend>
		<div class="form-group">
			<label class="col-sm-2 control-label">Tên bài học</label>
			<div class="col-sm-6">
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
				$listBH = "select * from am where a_BaiHoc = $id";
				$result_listBH = DataProvider::GetRows($listBH);
				if($result_listBH != null){
					foreach($result_listBH as $value) {
					?>
						<div class="form-group">
							<label class="col-sm-2 control-label">File âm thanh</label>
							<div class="col-sm-6">
								<input name="txtTenFileBaiHoc[]" type="text" class="form-control" required="required" value="<?php echo $value[1]?>">
								<input type="file" name="myfile[]">
							</div>
							<div class="col-sm-2">
								<a href="edit-baihoc.php?lbh=9&am=<?php echo $value[0] ?>" class="btn btn-primary noprint">Delete
								</a>
								
							</div>
						</div>
					<?php
					}
				}else{
					echo "Không có dữ liệu! ";
				}
				
				
				
			}else if($loai == 2){
				$listBH = "select * from tu where t_BaiHoc = $id";
				$result_listBH = DataProvider::GetRows($listBH);
				if($result_listBH != null){
					foreach($result_listBH as $value) {
					?>
						<div class="form-group">
							<label class="col-sm-2 control-label">File âm thanh</label>
							<div class="col-sm-6">
								<input name="txtTenFileBaiHoc[]" type="text" class="form-control" required="required" value="<?php echo $value[1]?>">
								<input type="file" name="myfile[]">
							</div>
							<div class="col-sm-2">
								<a href="edit-baihoc.php?lbh=9&tu=<?php echo $value[0] ?>" class="btn btn-primary noprint">Delete
								</a>
								
							</div>
						</div>
					<?php
					}
				}else{
					echo "Không có dữ liệu! ";
				}
			}else if($loai == 3){
				$listBH = "select * from cau where c_BaiHoc = $id";
				$result_listBH = DataProvider::GetRows($listBH);
				if($result_listBH != null){
					foreach($result_listBH as $value) {
					?>
						<div class="form-group">
							<label class="col-sm-2 control-label">File âm thanh</label>
							<div class="col-sm-6">
								<input name="txtTenFileBaiHoc[]" type="text" class="form-control" required="required" value="<?php echo $value[1]?>">
								<input type="file" name="myfile[]">
							</div>
							<div class="col-sm-2">
								<a href="edit-baihoc.php?lbh=9&cau=<?php echo $value[0] ?>" class="btn btn-primary noprint">Delete
								</a>
								
							</div>
						</div>
					<?php
					}
				}else{
					echo "Không có dữ liệu! ";
				}
				
			}
			else if($loai == 4){
				$listBH = "select * from hinhanh where ha_BaiHoc = $id";
				$result_listBH = DataProvider::GetRows($listBH);
				foreach($result_listBH as $value) {
					?>
						
						
					<?php
				}
				if($result_listBH != null){
					foreach($result_listBH as $value) {
					?>
						<div class="form-group">
							<div class="form-group">
								<label class="col-sm-2 control-label">Hình ảnh</label>
								<div class="col-sm-10">
									<input name="txtHinhAnh[]" type="hidden" class="form-control">
									<input type="file" name="myfileImage[]">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">File âm thanh</label>
								<div class="col-sm-8">
									<input name="txtTenFileBaiHoc[]" type="text" class="form-control" required="required" value="<?php echo $value[1]?>">
									<input type="file" name="myfile[]">
								</div>
								<div class="col-sm-2">
								<a href="edit-baihoc.php?lbh=10&hinhanh=<?php echo $value[0] ?>" class="btn btn-primary noprint">Xóa
								</a>
								
							</div>
							</div>
							
						</div>
					<?php
					}
				}else{
					echo "Không có dữ liệu! ";
				}
			}
		?>
		
	</fieldset>
</form>
