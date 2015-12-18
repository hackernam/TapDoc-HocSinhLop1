<script>
var sel_id = -1;
var bt_id = -1;
			

				document.getElementById("txtTD2").value = td;
				document.getElementById("txtHA2").value = ha;
				document.getElementById("txtGA2").value = ga;
				document.getElementById("txtL12").value = l1;
				document.getElementById("txtL22").value = l2;
				document.getElementById("txtL32").value = l3;
				document.getElementById("txtL42").value = l4;
				document.getElementById("txtDA2").text = da;
				
function submitThem(){				
	myFrmObj = document.Them;
	var e = document.getElementById("sltDA1");
	var strUser = e.options[e.selectedIndex].value;
	
	alert(strUser);
	var formData = {mode: '1', id: '-1', td: bt_id, ha: myFrmObj.txtHA1.value, 
		ga: myFrmObj.txtGA1.value, l1: myFrmObj.txtL11.value, l2: myFrmObj.txtL21.value,
		l3: myFrmObj.txtL31.value, l4: myFrmObj.txtL41.value, da: strUser};
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
	location.reload();
}

function submitCapNhat(){				
	myFrmObj = document.CapNhat;
	
	var e = document.getElementById("sltDA2");			
	var strUser = e.options[e.selectedIndex].value;
				
	var formData = {mode: '2', id: sel_id, td: "-1", ha: myFrmObj.txtHA2.value, 
		ga: myFrmObj.txtGA2.value, l1: myFrmObj.txtL12.value, l2: myFrmObj.txtL22.value,
		l3: myFrmObj.txtL32.value, l4: myFrmObj.txtL42.value, da: strUser};
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
	location.reload();
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
												$bt_id = $_GET['id'];
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
																'<?php echo $_GET['td'];?>',
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
														
														<a  href="process/xuly_cauhoi_get?mode=3&id=<?php echo $value['ch_ID'];?>&bt=<?php echo $bt_id;?>&td=<?php echo $_GET['td'];?>" class="btnx btnx-red" > Xóa</a>
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
                                    <form name="Them" class="form-horizontal form-label-left" onsubmit="submitThem()">
									
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtTD1" type="text" class="form-control" disabled="disabled" value="1">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Hình ảnh<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtHA1" type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ghi âm<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtGA1" type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lựa chọn 1<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtL11" type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lựa chọn 2<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtL21" type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lựa chọn 3<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtL31" type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lựa chọn 4<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtL41" type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
										
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Đáp án</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select  id="sltDA1" class="form-control">
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
												<a  type="submit" onclick="submitThem()"  href="#tab_content1" role="tab" 
															id="profile-tabb3" 
															data-toggle="tab" aria-controls="profile" aria-expanded="false" 
															class="btn btn-primary">
															Thêm
														</a>
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
                                    <form name="CapNhat" class="form-horizontal form-label-left" onsubmit="submitCapNhat()">
									
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtTD2" type="text" class="form-control" disabled="disabled" value="1">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Hình ảnh<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtHA2" type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ghi âm<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtGA2" type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lựa chọn 1<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtL12" type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lựa chọn 2<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtL22" type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lựa chọn 3<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtL32" type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Lựa chọn 4<span class="required">*</span>
											</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtL42" type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
										
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Đáp án</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select  id="sltDA2" class="form-control">
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
												<a onclick="submitCapNhat()" href="#tab_content1" role="tab" 
															id="profile-tabb4" 
															data-toggle="tab" aria-controls="profile" aria-expanded="false" 
															class="btn btn-primary">
															Lưu
														</a>											
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
				document.getElementById("txtTD2").value = td;
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