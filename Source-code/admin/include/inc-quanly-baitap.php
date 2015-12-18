<script>
var sel_id = -1;
			

function submitThem(){				
	myFrmObj = document.Them;
	var formData = {mode: '1', id: '-1', td:  myFrmObj.txtTD.value};
	$.ajax(
	{
		url : "process/xuly_baitap_post.php",
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
	var formData = {mode: '2', id: sel_id, td: myFrmObj.txtTD2.value};
	$.ajax(
	{
		url : "process/xuly_baitap_post.php",
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
								<li role="presentation" class="active"><a href="#tab_content1" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Danh Sách Bài Tập</a>
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
													<th style="width: 25%;">Tiêu Đề </th>
													<th>Ngày Tạo</th>													
													<th style=""></th>
												</tr>
											</thead>

											<tbody>
											<?php
											
											$i = 0;
											
											$sql = "SELECT bt_ID, bt_TieuDe, bt_NgayTao FROM baitap";
											$result = DataProvider::GetRows($sql);
											if($result != null)
											{
												foreach ($result as $value) 
												{
													$i++;
												?>
												<tr class="<?php echo $i % 2 ==0 ? 'even pointer' : 'odd pointer'; ?>">
													<td class=" "><?php echo $i; ?></td>
													<td class=" "><?php echo $value['bt_ID']; ?></td>
													<td class=" ">
														<a href="quanly_cauhoi.php?id=<?php echo $value['bt_ID']; ?>&td=<?php echo $value['bt_TieuDe']; ?>">
															<?php echo $value['bt_TieuDe']; ?>
														</a>
													</td>
													<td class=" "><?php echo $value['bt_NgayTao']; ?></td>
													<td align="right">
														<a  href="#tab_content3" role="tab" id="profile-tabb2" data-toggle="tab" aria-controls="profile" aria-expanded="false" onclick="edit('<?php echo $value['bt_ID'];?>','<?php echo $value['bt_TieuDe'];?>','<?php echo $value['bt_NgayTao'];?>')" class=" btnx btnx-tear"> Cập nhật</a>
														<a  href="process/xuly_baitap_get.php?mode=3&id=<?php echo $value['bt_ID'];?>" class="btnx btnx-red" > Xóa</a>
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
                                    <form name="Them" class="form-horizontal form-label-left" onsubmit="submitThem()">

                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtTD" type="text" class="form-control" placeholder="Tiêu đề">
                                            </div>
                                        </div>
										
										
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
												<a type="submit" onclick="submitThem()" href="#tab_content1" role="tab" 
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
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtTD2" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
										
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ngay Tao</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtNT2" type="text" class="form-control" disabled="disabled" placeholder="" value="sdf">
                                            </div>
                                        </div>
										
										
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Sửa</button>
																								
												<a  href="#tab_content1" role="tab" 
															id="profile-tabb4" 
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
			
			function edit(id,td,nt) {
				sel_id = id;
				document.getElementById("txtTD2").value = td ;
				document.getElementById("txtNT2").value = nt ;
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