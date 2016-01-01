<?php 
//include_once '../dataconfig/dataprovider.php';

	if(isset($_REQUEST["btnThem"])){
		
		$btid = $_REQUEST['txtBTID1'];
		$ha = $_REQUEST['txtHA1'];
		$ga = $_REQUEST['txtGA1'];
		$l1 = $_REQUEST['txtL11'];
		$l2 = $_REQUEST['txtL21'];
		$l3 = $_REQUEST['txtL31'];
		$l4 = $_REQUEST['txtL41'];
		$da = $_REQUEST['sltDA1'];
		
		$hu_n = $_FILES["fileHA1"]["name"];
		$hu_te = $_FILES["fileHA1"]["tmp_name"];
		$hu_ty = $_FILES["fileHA1"]["type"];
		$hu_er = $_FILES["fileHA1"]["error"];
		if($hu_er > 0 && $hu_n != null)
		{
			die("faile $hu_er");
		}else{
			move_uploaded_file($hu_te,"../upload/HinhAnh/BaiTap/".$hu_n);
		}
		if($hu_n != null){
			$ha = 'upload/HinhAnh/BaiTap/'.$hu_n;
		}
		
		
		$gu_n = $_FILES["fileGA1"]["name"];
		$gu_te = $_FILES["fileGA1"]["tmp_name"];
		$gu_ty = $_FILES["fileGA1"]["type"];
		$gu_er = $_FILES["fileGA1"]["error"];
		if($gu_er > 0 && $gu_n != null)
		{
			die("faile $gu_er");
		}else{
			move_uploaded_file($gu_te,"../upload/GhiAm/BaiTap/".$gu_n);
		}
		if($gu_n != null){
			$ga = 'upload/GhiAm/BaiTap/'.$gu_n;
		}
		
		$sql = "INSERT INTO cauhoi 
				(ch_BaiTap, ch_DuongDanHinhAnh, ch_DuongDanGhiAm, ch_LuaChon1, ch_LuaChon2, ch_LuaChon3, ch_LuaChon4, ch_DapAn) 
			VALUES
				('$btid','$ha','$ga','$l1','$l2','$l3','$l4','$da')";
			DataProvider::ExecuteQuery($sql);
	  echo '<script>alert("Thêm thành công!")</script>';
		
			
	}
	
	if(isset($_REQUEST["btnLuu"])){
		
		$id = $_REQUEST['txtID2'];
		$ha = $_REQUEST['txtHA2'];
		$ga = $_REQUEST['txtGA2'];
		$l1 = $_REQUEST['txtL12'];
		$l2 = $_REQUEST['txtL22'];
		$l3 = $_REQUEST['txtL32'];
		$l4 = $_REQUEST['txtL42'];
		$da = $_REQUEST['sltDA2'];
		
		$hu_n = $_FILES["fileHA2"]["name"];
		$hu_te = $_FILES["fileHA2"]["tmp_name"];
		$hu_ty = $_FILES["fileHA2"]["type"];
		$hu_er = $_FILES["fileHA2"]["error"];
		if($hu_er > 0 && $hu_n != null)
		{
			die("faile $hu_er");
		}else{
			move_uploaded_file($hu_te,"../upload/HinhAnh/BaiTap/".$hu_n);
		}
		if($hu_n != null){
			$ha = 'upload/HinhAnh/BaiTap/'.$hu_n;
		}
		
		
		$gu_n = $_FILES["fileGA2"]["name"];
		$gu_te = $_FILES["fileGA2"]["tmp_name"];
		$gu_ty = $_FILES["fileGA2"]["type"];
		$gu_er = $_FILES["fileGA2"]["error"];
		if($gu_er > 0 && $gu_n != null)
		{
			die("faile $gu_er");
		}else{
			move_uploaded_file($gu_te,"../upload/GhiAm/BaiTap/".$gu_n);
		}
		if($gu_n != null){
			$ga = 'upload/GhiAm/BaiTap/'.$gu_n;
		}
		
		$sql = "UPDATE cauhoi
					SET ch_DuongDanHinhAnh = '$ha', ch_DuongDanGhiAm = '$ga',
						ch_LuaChon1 = '$l1', ch_LuaChon2 = '$l2', ch_LuaChon3 = '$l3',ch_LuaChon4 = '$l4', ch_DapAn = '$da'
					WHERE ch_ID= '$id' ";
			DataProvider::ExecuteQuery($sql);
	  echo '<script>alert("Cập nhật thành công!")</script>';
		
			
	}
	?>

<script>
var sel_id = -1;
var bt_id = -1;
				
function submitThem(){				
	myFrmObj = document.Them;
	
	if((myFrmObj.txtHA1.value.length > 0 || myFrmObj.fileHA1.value.length > 0) &&
		(myFrmObj.txtGA1.value.length > 0 || myFrmObj.fileGA1.value.length > 0)&&
		myFrmObj.txtL11.value.length > 0 &&
		myFrmObj.txtL21.value.length > 0 &&
		myFrmObj.txtL31.value.length > 0 &&
		myFrmObj.txtL41.value.length > 0){
			return true;
		/*
		var e = document.getElementById("sltDA1");
		var strUser = e.options[e.selectedIndex].value;
		var ha = myFrmObj.txtHA1.value.length > 0 ? myFrmObj.txtHA1.value :myFrmObj.fileHA1.tmp_name;
		var ga = myFrmObj.txtGA1.value.length > 0 ? myFrmObj.txtGA1.value :myFrmObj.fileGA1.tmp_name;
		
		alert(ha +"\r\n"+ga);
		
		var formData = {mode: '1', id: '-1', td: bt_id, ha: ha, 
			ga: ga, l1: myFrmObj.txtL11.value, l2: myFrmObj.txtL21.value,
			l3: myFrmObj.txtL31.value, l4: myFrmObj.txtL41.value, da: strUser,
			hut: myFrmObj.txtHA1.value.length > 0 ? 0 : 1, gut: myFrmObj.txtGA1.value.length > 0 ? 0 : 1};
		$.ajax(
		{
			url : "process/xuly_cauhoi_post.php",
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
		window.location.href = 'quanly_cauhoi.php?id=<?php echo $bt_id; ?>&td=<?php echo $bt_td; ?>';*/
	}else{
		return false;
	}
}

function submitCapNhat(){				
	myFrmObj = document.CapNhat;
	if((myFrmObj.txtHA2.value.length > 0 || myFrmObj.fileHA2.value.length > 0) &&
		(myFrmObj.txtGA2.value.length > 0 || myFrmObj.fileGA2.value.length > 0)&&
		myFrmObj.txtL12.value.length > 0 &&
		myFrmObj.txtL22.value.length > 0 &&
		myFrmObj.txtL32.value.length > 0 &&
		myFrmObj.txtL42.value.length > 0){
			return true;
	/*
		var e = document.getElementById("sltDA2");			
		var strUser = e.options[e.selectedIndex].value;
		var ha = myFrmObj.txtHA2.value.length > 0 ? myFrmObj.txtHA2.value :myFrmObj.fileHA2.value;
		var ga = myFrmObj.txtGA2.value.length > 0 ? myFrmObj.txtGA2.value :myFrmObj.fileGA2.value;
					
		var formData = {mode: '2', id: sel_id, td: "-1", ha: ha, 
			ga: ga, l1: myFrmObj.txtL12.value, l2: myFrmObj.txtL22.value,
			l3: myFrmObj.txtL32.value, l4: myFrmObj.txtL42.value, da: strUser,
			hut: myFrmObj.txtHA2.value.length > 0 ? 0 : 1, gut: myFrmObj.txtGA2.value.length > 0 ? 0 : 1};
		$.ajax(
		{
			url : "process/xuly_cauhoi_post.php",
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
	window.location.href = 'quanly_cauhoi.php?id=<?php echo $bt_id; ?>&td=<?php echo $bt_td; ?>';*/
	}
	return false;
}

function alwaysFalse(){
	return false;
}

function refresher(){
	window.location.href = 'quanly_cauhoi.php?id=<?php echo $bt_id; ?>&td=<?php echo $bt_td; ?>';
}
</script>

				<!-- inc-php-->
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
								
					<div class="x_content">
                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
							<ul id="myTab1" class="nav nav-tabs bar_tabs" role="tablist">
								<li role="presentation" class="active"><a href="#tab_content1" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Danh Sách Câu Hỏi</a>
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
													<th style="width: 8%;">STT </th>
													<th style="width: 8%;">ID </th>
													<th>Hình Ảnh </th>
													<th>Ghi Âm </th>
													<th>Lựa Chọn 1</th>
													<th>Lựa Chọn 2</th>
													<th>Lựa Chọn 3</th>
													<th>Lựa Chọn 4</th>
													<th>Đáp Án </th>													
													<th></th>
												</tr>
											</thead>

											<tbody>
											
											<?php
											if(isset($_GET['id']))
											{
												
												$i = 0;
												
												$sql = "SELECT ch_ID, ch_DuongDanHinhAnh,
													ch_DuongDanGhiAm, ch_LuaChon1, ch_LuaChon2, ch_LuaChon3,
													ch_LuaChon4, ch_DapAn 
													FROM cauhoi 
													WHERE ch_BaiTap = $bt_id";
												$result = DataProvider::GetRows($sql);
												if($result != null)
												{
													foreach ($result as $value) 
													{
														$i++;
												?>
												<tr class="<?php echo $i % 2 ==0 ? 'even pointer' : 'odd pointer'; ?>">
													<td class=" "><?php echo $i; ?></td>
													<td class=" "><?php echo $value['ch_ID']; ?></td>
													<td class=" "><?php echo $value['ch_DuongDanHinhAnh']; ?></td>
													<td class=" "><?php echo $value['ch_DuongDanGhiAm']; ?></td>
													<td class=" "><?php echo $value['ch_LuaChon1']; ?></td>
													<td class=" "><?php echo $value['ch_LuaChon2']; ?></td>
													<td class=" "><?php echo $value['ch_LuaChon3']; ?></td>
													<td class=" "><?php echo $value['ch_LuaChon4']; ?></td>
													<td class=" "><?php echo $value['ch_DapAn']; ?></td>
													<td align="right">
														<a  href="#tab_content3" role="tab" 
															id="profile-tabb2" 
															data-toggle="tab" aria-controls="profile" aria-expanded="false" 
															onclick="edit(
																'<?php echo $value['ch_ID'];?>',
																'<?php echo $bt_td;?>',
																'<?php echo $value['ch_DuongDanHinhAnh'];?>',
																'<?php echo $value['ch_DuongDanGhiAm'];?>',
																'<?php echo $value['ch_LuaChon1'];?>',
																'<?php echo $value['ch_LuaChon2'];?>',
																'<?php echo $value['ch_LuaChon3'];?>',
																'<?php echo $value['ch_LuaChon4'];?>',
																'<?php echo $value['ch_DapAn'];?>'
															)" class=" btnx btnx-tear">
															Cập nhật
														</a>
														
														<a  href="process/xuly_cauhoi_get?mode=3&id=<?php echo $value['ch_ID'];?>&bt=<?php echo $bt_id;?>&td=<?php echo $bt_td;?>" class="btnx btnx-red" > Xóa</a>
													</td>
												</tr>
											<?php
													}
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
                                    <form enctype="multipart/form-data" method="post" name="Them" action="" class="form-horizontal form-label-left" role="form" onsubmit="return submitThem()">
									
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
												<input disabled="disabled" class="form-control" value="<?php echo $bt_td;?>">
                                                <input id="txtBTID1" name ="txtBTID1" type="hidden" class="form-control" value="<?php echo $bt_id;?>">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Hình ảnh<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtHA1" name="txtHA1" type="text" class="form-control" placeholder="Default Input" >
												<input type="file" name="fileHA1" id="fileHA1" accept="image/*">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ghi âm<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtGA1" name="txtGA1" type="text" class="form-control" placeholder="Default Input">
												<input type="file" name="fileGA1" id="fileGA1" accept="audio/*">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lựa chọn 1<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtL11" name="txtL11" type="text" class="form-control" placeholder="Default Input"
												required="required" >
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lựa chọn 2<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtL21" name="txtL21" type="text" class="form-control" placeholder="Default Input"
												required="required" >
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lựa chọn 3<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtL31" name="txtL31" type="text" class="form-control" placeholder="Default Input"
												required="required" >
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lựa chọn 4<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtL41" name="txtL41" type="text" class="form-control" placeholder="Default Input"
												required="required" >
                                            </div>
                                        </div>
										
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Đáp án</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select  id="sltDA1" name="sltDA1" class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
											<button id="" name="btnThem" type="submit" class="btn btn-primary">Thêm</button>
												<!--a  type="submit" onclick="submitThem()"  href="#tab_content1" role="tab" 
															id="profile-tabb3" 
															data-toggle="tab" aria-controls="profile" aria-expanded="false" 
															class="btn btn-primary">
															Thêm
														</a-->
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
									<form enctype="multipart/form-data" method="post" name="CapNhat" action="" class="form-horizontal form-label-left" role="form" onsubmit="return submitCapNhat()">
                                    <form name="CapNhat" action="" class="form-horizontal form-label-left" onsubmit="return false">
									
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
												<input disabled="disabled" class="form-control" value="<?php echo $bt_td;?>">
                                                <input id="txtBTID2" name ="txtBTID2" type="hidden" class="form-control" value="<?php echo $bt_id;?>">
                                                <input id="txtID2" name ="txtID2" type="hidden" class="form-control" value="">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Hình ảnh<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtHA2" name="txtHA2" type="text" class="form-control" placeholder="Default Input">
												<input type="file" name="fileHA2" id="fileHA2">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ghi âm<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtGA2" name="txtGA2" type="text" class="form-control" placeholder="Default Input">
												<input type="file" name="fileGA2" id="fileHA2">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lựa chọn 1<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtL12" name="txtL12" type="text" class="form-control" placeholder="Default Input"
												required="required" >
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lựa chọn 2<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtL22" name="txtL22" type="text" class="form-control" placeholder="Default Input"
												required="required" >
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lựa chọn 3<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtL32" name="txtL32" type="text" class="form-control" placeholder="Default Input"
												required="required" >
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lựa chọn 4<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtL42" name="txtL42" type="text" class="form-control" placeholder="Default Input"
												required="required" >
                                            </div>
                                        </div>
										
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Đáp án</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select  id="sltDA2" name="sltDA2" class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">											
                                                <button  type="submit" id="btnLuu" name="btnLuu" class="btn btn-primary">Lưu</button>
												<!--a onclick="submitCapNhat()" href="#tab_content1" role="tab" 
															id="profile-tabb4" 
															data-toggle="tab" aria-controls="profile" aria-expanded="false" 
															class="btn btn-primary">
															Lưu
														</a-->											
												<a  href="#tab_content1" role="tab" 
															id="profile-tabb5" 
															data-toggle="tab" aria-controls="profile" aria-expanded="false" 
															class="btn btn-danger">
															Hủy
														</a>

                                            </div>
                                        </div>

                                    </form>
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
bt_id = <?php echo $bt_id;?>;
			function edit(id, td,ha,ga,l1,l2,l3,l4,da) {
				sel_id = id;
				document.getElementById("txtID2").value = id;
				document.getElementById("txtHA2").value = ha;
				document.getElementById("txtGA2").value = ga;
				document.getElementById("txtL12").value = l1;
				document.getElementById("txtL22").value = l2;
				document.getElementById("txtL32").value = l3;
				document.getElementById("txtL42").value = l4;
				var e = document.getElementById("sltDA2");
				e.value = da;
			}
						
			function newRows() {
				var tableRef = document.getElementById('example').getElementsByTagName('tbody')[0];

				// Insert a row in the table at the last row
				var newRow   = tableRef.insertRow(tableRef.rows.length);

				// Insert a cell in the row at index 0
				var cell1 = newRow.insertCell(0);
				var cell2 = newRow.insertCell(1);
				cell1.innerHTML = "NEW CELL1 " ;
				cell2.innerHTML = "NEW CELL2 " ;
			}
			
			function myFunction(id) {
				document.getElementById('example').getElementsByTagName('tbody')[0].deleteRow(id);
			}
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
		
		$('input[type=file]').change(function () {
			console.log(this.files[0].mozFullPath);
		});
    </script>