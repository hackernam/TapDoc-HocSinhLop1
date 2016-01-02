<script language="javascript">
function nodification(i){
	$(document).ready( function() {
		switch(i){
			case 0:
				$('#div_alert').append('<div class="alert alert-success"> '+
						'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> '+
						'<strong>Thêm thành công </strong></div>');
				break;
			case 1:
				$('#div_alert').append('<div class="alert alert-danger"> '+
						'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> '+
						'<strong>Thêm thất bại </strong>/div>');
				break;
			case 2:
				$('#div_alert').append('<div class="alert alert-success"> '+
						'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> '+
						'<strong>Cập nhật thành công </strong></div>');
				break;
			case 3:
				$('#div_alert').append('<div class="alert alert-danger"> '+
						'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> '+
						'<strong>Cập nhật thất bại </strong></div>');
				break;
		}
	});
}
</script>

<?php 
	include_once '../dataconfig/dataprovider.php';

	if(isset($_REQUEST["btnThem"])){
		
		$lvl = $_REQUEST["txtLvl"];
		$ha = $_REQUEST["txtHA"];
		$ga = $_REQUEST["txtGA"];
		$nd = $_REQUEST["txtND"];
		$kh = 1;
		
		$hu_n = $_FILES["fileHA"]["name"];
		$hu_te = $_FILES["fileHA"]["tmp_name"];
		$hu_ty = $_FILES["fileHA"]["type"];
		$hu_er = $_FILES["fileHA"]["error"];		
		if($hu_er >  0 && $hu_n != null)
		{
			die("faile $hu_er");
		}else{
			move_uploaded_file($hu_te,"../upload/HinhAnh/TroChoi/".$hu_n);
		}
		if($hu_n != null){
			$ha = 'upload/HinhAnh/TroChoi/'.$hu_n;
		}
		
		$gu_n = $_FILES["fileGA"]["name"];
		$gu_te = $_FILES["fileGA"]["tmp_name"];
		$gu_ty = $_FILES["fileGA"]["type"];
		$gu_er = $_FILES["fileGA"]["error"];
		if($gu_er > 0 && $gu_n != null)
		{
			die("faile $gu_er");
		}else{
			move_uploaded_file($gu_te,"../upload/GhiAm/TroChoi/".$gu_n);
		}
		if($gu_n != null){
			$ga = 'upload/GhiAm/TroChoi/'.$gu_n;
		}
				
		$sql = "INSERT INTO xepchu(xc_level, xc_DuongDanHinhAnh, xc_DuongDanGhiAm, xc_NoiDung, xc_Khoa) 
			VALUES ('$lvl', '$ha', '$ga', '$nd', '$kh')";
		try {			
			DataProvider::ExecuteQuery($sql);
			echo '<script type="text/javascript">
					nodification(0);
				</script>';
		}
		catch (Exception $e) {
			echo '<script type="text/javascript">
					nodification(1);
				</script>';
		}
			
			
	}
	
	if(isset($_REQUEST["btnSua"])){
		
		$id = $_REQUEST['txtID2'];
		$lvl = $_REQUEST["txtLvl2"];
		$ha = $_REQUEST["txtHA2"];
		$ga = $_REQUEST["txtGA2"];
		$nd = $_REQUEST["txtND2"];
		
		$hu_n = $_FILES["fileHA2"]["name"];
		$hu_te = $_FILES["fileHA2"]["tmp_name"];
		$hu_ty = $_FILES["fileHA2"]["type"];
		$hu_er = $_FILES["fileHA2"]["error"];		
		if($hu_er >  0 && $hu_n != null){
			die("fail $hu_er");
		}else{
			move_uploaded_file($hu_te,"../upload/HinhAnh/TroChoi/".$hu_n);
		}
		
		if($hu_er != 4){
			$ha = 'upload/HinhAnh/TroChoi/'.$hu_n;
		}
					
		$gu_n = $_FILES["fileGA2"]["name"];
		$gu_te = $_FILES["fileGA2"]["tmp_name"];
		$gu_ty = $_FILES["fileGA2"]["type"];
		$gu_er = $_FILES["fileGA2"]["error"];
		if($gu_er > 0 && $gu_n != null) {
			die("faile $gu_er");
		}else{
			move_uploaded_file($gu_te,"../upload/HinhAnh/TroChoi/".$gu_n);
		}
		if($gu_n != null){
			$ga = 'upload/GhiAm/TroChoi/'.$gu_n;
		}
			
		$sql = "UPDATE xepchu SET xc_level = '$lvl', xc_DuongDanHinhAnh = '$ha', xc_DuongDanGhiAm = '$ga',
			xc_NoiDung = '$nd' WHERE xc_ID= '$id' ";
		try {			
			DataProvider::ExecuteQuery($sql);
			echo '<script type="text/javascript">
					nodification(2);
				</script>';
		}
		catch (Exception $e) {
			echo '<script type="text/javascript">
					nodification(3);
				</script>';
		}
	}
	?>

<script>
var sel_id = -1;
			

function submitThem(){				
	myFrmObj = document.Them;
	
	if(myFrmObj.txtLvl.value.length > 0 &&
		(myFrmObj.txtHA.value.length > 0 || myFrmObj.fileHA.value.length > 0)&&
		(myFrmObj.txtGA.value.length > 0 || myFrmObj.fileGA.value.length > 0) &&
		myFrmObj.txtND.value.length > 0){
		return true;
		/*var formData = {mode: '1', id: '-1', lvl:  myFrmObj.txtLvl.value, ha:  myFrmObj.txtHA.value, ga:  myFrmObj.txtGA.value, nd:  myFrmObj.txtND.value};
		
				
		$.ajax(
		{
			url : "process/xuly_trochoixc_post.php",
			type: "POST",
			data : formData,
			success: function(data, textStatus, jqXHR)
			{
				//alert("OK " + data + " " +textStatus);
			},
			error: function(jqXHR, textStatus, errorThrown)
			{
				//alert("Err " + textStatus + " " + errorThrown);
			}
		});
		
		location.reload();*/
	}
	else{
		return false;
	}
}

function submitCapNhat(){				
	myFrmObj = document.CapNhat;
	
	if(myFrmObj.txtLvl2.value.length > 0 &&
		(myFrmObj.txtHA2.value.length > 0 || myFrmObj.fileHA2.value.length > 0)&&
		(myFrmObj.txtGA2.value.length > 0 || myFrmObj.fileGA2.value.length > 0)&&
		myFrmObj.txtND2.value.length > 0){
			return true;
		/*var formData = {mode: '2', id: sel_id, lvl:  myFrmObj.txtLvl2.value, ha:  myFrmObj.txtHA2.value, ga:  myFrmObj.txtGA2.value, nd:  myFrmObj.txtND2.value};
		var t;
		$.ajax(
		{
			url : "process/xuly_trochoixc_post.php",
			type: "POST",
			data : formData,
			success: function(data, textStatus, jqXHR)
			{			
				//alert(textStatus +": " + data);
			},
			error: function(jqXHR, textStatus, errorThrown)
			{			
					/*if(textStatus==="timeout") {
						alert("got timeout");
					} else {
						alert(textStatus + ": " + errorThrown);
					}//
			},
			complete: function(jqXHR, textStatus)
			{			
				//alert("Com " + " " + textStatus);
			}
		});	
		location.reload();*/
	}else{
		return false;
	}
}

function refresher(){
	location.reload();
}
</script>
					<!-- inc-php-->
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
								
					<div class="x_content">
                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
							<ul id="myTab1" class="nav nav-tabs bar_tabs" role="tablist">
								<li role="presentation" class="active"><a href="#tab_content1" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Danh Sách Cấp Độ</a>
                                </li>
                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tabb" data-toggle="tab" aria-controls="profile" aria-expanded="false">Thêm Mới</a>
								</li>
							</ul>
							<div id="myTabContent1" class="tab-content">
								<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
									<div class="x_content">
										<button onclick="refresher()" class="btn btn-round btnx-green btn-xs">Làm mới</button>
										<table id="example" class="table table-striped responsive-utilities jambo_table">
											<thead>
												<tr class="headings">
													<th style="width: 5%;">STT </th>
													<th style="width: 5%;">ID </th>
													<th>Màng</th>
													<th>Hình ảnh</th>
													<th>Ghi âm</th>
													<th>Nội dung</th>											
													<th style=""></th>
												</tr>
											</thead>

											<tbody>
											<?php
											
											$i = 0;
											
											$sql = "SELECT xc_ID, xc_level, xc_DuongDanHinhAnh, xc_DuongDanGhiAm, xc_NoiDung FROM xepchu";
											$result = DataProvider::GetRows($sql);
											if($result != null)
											{
												foreach ($result as $value) 
												{
													$i++;
												?>
												<tr class="<?php echo $i % 2 ==0 ? 'even pointer' : 'odd pointer'; ?>">
													<td class=" "><?php echo $i; ?></td>
													<td class=" "><?php echo $value['xc_ID']; ?></td>
													<td class=" "><?php echo $value['xc_level']; ?></td>
													<td class=" "><?php echo $value['xc_DuongDanHinhAnh']; ?></td>
													<td class=" "><?php echo $value['xc_DuongDanGhiAm']; ?></td>
													<td class=" "><?php echo $value['xc_NoiDung']; ?></td>
													<td align="right">
														<a  href="#tab_content3" role="tab" id="profile-tabb2" data-toggle="tab" aria-controls="profile" aria-expanded="false" onclick="edit('<?php echo $value['xc_ID'];?>','<?php echo $value['xc_level'];?>','<?php echo $value['xc_DuongDanHinhAnh'];?>','<?php echo $value['xc_DuongDanGhiAm'];?>','<?php echo $value['xc_NoiDung'];?>')" class=" btnx btnx-tear"> Cập nhật</a>
														<a  href="process/xuly_trochoixc_get.php?mode=3&id=<?php echo $value['xc_ID'];?>" class="btnx btnx-red" > Xóa</a>
													</td>
												</tr>
											<?php
												}
											}
											
											?>
											</tbody>
										</table>
										<button onclick="refresher()" class="btn btn-round btnx-green btn-xs">Làm mới</button>
									</div>
								</div>
								
								<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
								
								<div class="x_panel">
                                <div class="x_content">
                                    <br />
                                    <form name="Them" enctype="multipart/form-data" method="post" action="" 
										class="form-horizontal form-label-left" role="form" onsubmit="return submitThem()">
									

                                        
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Màng<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtLvl" name ="txtLvl"type="text" class="form-control" placeholder="Màng, cấp độ - ghi bằng số"
												onkeypress="if(this.value.match(/\D/)) this.value=this.value.replace(/\D/g,'')"
												onkeyup   ="if(this.value.match(/\D/)) this.value=this.value.replace(/\D/g,'')"
												required="required" >
                                            </div>
                                        </div>
										
										<div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Hình ảnh<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtHA" name="txtHA" type="text" class="form-control" placeholder="Hình ảnh">
												<input type="file" name="fileHA" id="fileHA" accept="image/*">
                                            </div>
                                        </div>
										
										<div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ghi âm<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtGA" name="txtGA" type="text" class="form-control" placeholder="Ghi âm">
												<input type="file" name="fileGA" id="fileGA" accept="audio/*">
                                            </div>
                                        </div>
										
										<div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtND" name="txtND" type="text" class="form-control" placeholder="Nội dung"
												required="required" >
                                            </div>
                                        </div>
										
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button id="btnThem" name="btnThem" type="submit" class="btn btn-primary">Thêm</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
								</div>
								
								</div>
								
								<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
								
								<div class="x_panel">
                                <div class="x_content">
                                    <br />
                                    <form name="CapNhat" enctype="multipart/form-data" method="post" action=""
										class="form-horizontal form-label-left" role="form" onsubmit="return submitCapNhat()">
										<div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Màng<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtLvl2" name="txtLvl2" type="text" class="form-control" placeholder="Màng, cấp độ - ghi bằng số)"
												onkeypress="if(this.value.match(/\D/)) this.value=this.value.replace(/\D/g,'')"
												onkeyup   ="if(this.value.match(/\D/)) this.value=this.value.replace(/\D/g,'')"
												required="required" >
                                                <input id="txtID2" name ="txtID2" type="hidden" class="form-control" value="">
                                            </div>
                                        </div>
										
										<div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Hình ảnh<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtHA2" name="txtHA2"type="text" class="form-control" placeholder="Hình ảnh">
												<input type="file" name="fileHA2" id="fileHA2" accept="image/*">
                                            </div>
                                        </div>
										
										<div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ghi âm<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtGA2" name="txtGA2"type="text" class="form-control" placeholder="Ghi âm">
												<input type="file" name="fileGA2" id="fileGA2" accept="audio/*">
                                            </div>
                                        </div>
										
										<div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nội dung<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtND2" name="txtND2" type="text" class="form-control" placeholder="Nội dung"
												required="required" >
                                            </div>
                                        </div>
										
										
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button id="btnSua" name="btnSua" type="submit" class="btn btn-primary">Sửa</button>
																								
												<a  href="#tab_content1" role="tab" 
															id="profile-tabb4" 
															data-toggle="tab" aria-controls="profile" aria-expanded="false" 
															class="btn btn-danger">
															Hủy
														</a>
                                            </div>
                                        </form>

                                    </div>
                                </div>
								</div>
								
								</div>
							</div>
						</div>
					</div>		
					
					<!-------------====================------------->					
					
								
                                
								
								
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />

                    </div>
					
					<!-- /inc-php -->
<script>
			
			function edit(id,lvl,ha,ga,nd) {
				sel_id = id;
				document.getElementById("txtID2").value = id ;
				document.getElementById("txtLvl2").value = lvl ;
				document.getElementById("txtHA2").value = ha ;
				document.getElementById("txtGA2").value = ga ;
				document.getElementById("txtND2").value = nd ;
			}
			
			/*function newRow() {
				var tableRef = document.getElementById('example').getElementsByTagName('tbody')[0];

				// Insert a row in the table at the last row
				var newRow   = tableRef.insertRow(tableRef.rows.length);

				// Insert a cell in the row at index 0
				var cell1 = newRow.insertCell(0);
				var cell2 = newRow.insertCell(1);
				cell1.innerHTML = "NEW CELL1 " ;
				cell2.innerHTML = "NEW CELL2 " ;
			}
			
			function delRow(id) {
				document.getElementById('example').getElementsByTagName('tbody')[0].deleteRow(id);
			}*/
</script>
<!-- form validation -->
    <script>
        // initialize the validator function
        validator.message['date'] = 'not a real date';

        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

        $('.multi.required')
            .on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });

        // bind the validation to the form submit event
        //$('#send').click('submit');//.prop('disabled', true);

        $('form').submit(function (e) {
            e.preventDefault();
            var submit = true;
            // evaluate the form using generic validaing
            if (!validator.checkAll($(this))) {
                submit = false;
            }

            if (submit)
                this.submit();
            return false;
        });

        /* FOR DEMO ONLY */
        $('#vfields').change(function () {
            $('form').toggleClass('mode2');
        }).prop('checked', false);

        $('#alerts').change(function () {
            validator.defaults.alerts = (this.checked) ? false : true;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);
    </script>