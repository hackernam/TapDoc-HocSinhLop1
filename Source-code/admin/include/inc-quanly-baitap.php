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
		$td = $_REQUEST["txtTD"];
		$dt = date("Y-m-d h:i:s");
		
		$sql = "INSERT INTO baitap(bt_TieuDe, bt_NgayTao) VALUES ('$td', '$dt')";	
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
		$td = $_REQUEST["txtTD2"];
		$id = $_REQUEST["txtID2"];
		
		$sql = "UPDATE baitap SET bt_TieuDe = '$td' WHERE bt_ID= '$id' ";			
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
	if(myFrmObj.txtTD.value.length > 0){
		return true;
		//document.getElementById('home-tabb').click();
		/*var formData = {mode: '1', id: '-1', td:  myFrmObj.txtTD.value};
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
		
		location.reload();*/
	}
	else{
		return false;
	}
}

function submitCapNhat(){				
	myFrmObj = document.CapNhat;
	if(myFrmObj.txtTD2.value.length > 0){		
		return true;
		/*var formData = {"mode": '2', "id": sel_id, "td": myFrmObj.txtTD2.value};
		var t;
		$.ajax(
		{
			url : "process/xuly_baitap_post.php",
			type: "POST",
			data : formData,
			timeout: 3000,
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
					}* /
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
                                    <form name="Them" method="post" action="" class="form-horizontal form-label-left" onsubmit="return submitThem()" >

                                        
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtTD" name="txtTD" type="text" class="form-control" placeholder="Tiêu đề"
												required="required" >
                                            </div>
                                        </div>
										
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button id="send" name="btnThem" type="submit" class="btn btn-primary">Thêm</button>
												<!--a onclick="submitThem()" href="#tab_content1" role="tab" 
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
                                    <form name="CapNhat" method="post" action="" class="form-horizontal form-label-left" onsubmit="return submitCapNhat()">
										<div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tiêu đề<span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtTD2" name="txtTD2" type="text" class="form-control" placeholder="Tiêu đề"
												required="required" >
												<input id="txtID2" name="txtID2" type="hidden" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Ngày Tạo</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="txtNT2" type="text" class="form-control" disabled="disabled" placeholder="" value="sdf">
                                            </div>
                                        </div>
										
										
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button name="btnSua" type="submit" class="btn btn-primary">Sửa</button>
																								
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
			
			function edit(id,td,nt) {
				sel_id = id;
				document.getElementById("txtID2").value = id ;
				document.getElementById("txtTD2").value = td ;
				document.getElementById("txtNT2").value = nt ;
			}
			
			function newRow() {
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
    </script>