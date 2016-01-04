<?php
	include_once '../dataconfig/dataprovider.php';
	if(isset($_REQUEST["btnAddUser"]))
  	{ 
		$name = $_FILES["myfile"]["name"];
		$temp = $_FILES["myfile"]["tmp_name"];
		$type = $_FILES["myfile"]["type"];
		$error = $_FILES["myfile"]["error"];
		if($error >0 && $name != null)
		{
			die("faile $error");
		}else{
			if($type == "image/png" || "image/jpg"){
					move_uploaded_file($temp,"../upload/HinhAnh/".$name);
					//echo "OK";
			}else{
				die("faile $error");
			}
		}
      $tenbaihoc = $_REQUEST["txtTenBaiHoc"];
      $ngaytao = $_REQUEST["txtNgayTao"];  
      $TypeBaiHoc = $_REQUEST["cbTypeBaiHoc"];
	  if($name ==null){
		$hinhanh = $_REQUEST["txtHinhAnh"];   
	  }else{
		  $hinhanh = 'upload/HinhAnh/'.$name;
	  }
		
	  
	  $solandoc = $_REQUEST["txtSoLanDoc"];
      $sql = "INSERT INTO baihoc(bh_TenBaiHoc, bh_LoaiBaiHoc, bh_NgayTao, bh_HinhDaiDien, bh_SoLanChon) 
	  VALUES ('$tenbaihoc','$TypeBaiHoc','2015-12-04 00:00:00','$hinhanh','$solandoc')";
      DataProvider::ExecuteQuery($sql);
	  echo '<script>alert("Thêm bài học thành công!")</script>';
  	}
?>

<a class="btn btn-primary" href="quanlybaihoc.php">Back</a>
<div id="result" style="color:#F00; font-weight:bold">&nbsp;</div>
<form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
  <fieldset>
  <legend>Thêm bài học</legend>
  <div class="form-group">
    <label class="col-sm-2 control-label">Tên bài học</label>
    <div class="col-sm-10">
      <input name="txtTenBaiHoc" type="text" class="form-control" required="required">
    </div>
  </div>
  

  <div class="form-group">
    <label class="col-sm-2 control-label">Loại bài học</label>
    <div class="col-sm-10">
  <select name="cbTypeBaiHoc" class="btn btn-default dropdown-toggle" style="width:50%"> 
  	 <?php
          $sql = "select * from loaibaihoc";
          $result_typeuser = DataProvider::GetRows($sql);
		  foreach($result_typeuser as $value) {
		  	  echo("<option value='$value[0]'>$value[1]</option>");
		  }
	?>
    </select>
  </div>
 </div>
 <div class="form-group">
    <label class="col-sm-2 control-label">Ngày tạo</label>
    <div class="col-sm-10">
      <div class="col-sm-3">
		<fieldset>
			<div class="control-group">
				<div class="controls">
					<div class="col-md-11 xdisplay_inputx form-group has-feedback" style="margin-left:-20px">
						<input name="txtNgayTao" type="text" class="form-control has-feedback-left" id="single_cal3" placeholder="Ngày tạo" aria-describedby="inputSuccess2Status3">
						<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
						<span id="inputSuccess2Status3" class="sr-only">(success)</span>
					</div>
				</div>
			</div>
		</fieldset>
	</div>
    </div>
	
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Hình ảnh</label>
    <div class="col-sm-10">
		<input name="txtHinhAnh" type="text" class="form-control">
		<input type="file" name="myfile">	
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Số lần đọc</label>
    <div class="col-sm-10">
      <input name="txtSoLanDoc" type="number" class="form-control" required="required">
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

<!-- /datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#single_cal1').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_1"
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
            $('#single_cal2').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_2"
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
            $('#single_cal3').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_3"
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
            $('#single_cal4').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4"
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#reservation').daterangepicker(null, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
        });
    </script>
    <!-- /datepicker -->