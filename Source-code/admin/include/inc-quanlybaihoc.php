<?php
	include_once '../dataconfig/dataprovider.php';
?>

 <h2 class="sub-header">Danh sách bài học:</h2>
        <a class="btn btn-success noprint" href="edit-baihoc.php?lbh=1">Add</a>
        <form action="" method="POST" class="noprint">
            
            <select name="cbTypeBaiHoc" id="selectvalue"  class="btn btn-default dropdown-toggle" style="width:50%"> 
			 <?php
					$TypeBaiHoc = $_REQUEST["cbTypeBaiHoc"];
					$sql = "select * from loaibaihoc";
					$result_typeuser = DataProvider::GetRows($sql);
					foreach($result_typeuser as $value) {
					  if($value[0] == $TypeBaiHoc){
						  echo("<option value='$value[0]' selected='selected'>$value[1]</option>");
					  }else{
						  echo("<option value='$value[0]'>$value[1]</option>");
					  }
					}
			?>
			</select>
             <input type="submit" name="btnSubmit" class="btn btn-info" value="OK" /> 
        </form>
        <div class="">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tên bài học</th>
                  <th>Loại bài học</th>
                  <th>Ngày tạo</th>
                  <th>Hình đại diện</th>
                  <th>Số lần chọn</th>
                </tr>
              </thead>
              <tbody>  
              
				<?php 
					if(isset($_REQUEST["btnSubmit"])){
						$TypeBaiHoc = $_REQUEST["cbTypeBaiHoc"];
						//echo $TypeBaiHoc;
						$result = DataProvider::GetRows("select * from baihoc where bh_LoaiBaiHoc = $TypeBaiHoc	");
						//echo $result; exit;
						foreach($result as $value) { ?>         
							<tr>
							  <td><?php echo $value[0] ?></td>
							  <td><?php echo $value[1]?></td>
							  <td><?php if($value[2] == 1)echo 'Phát Âm Theo Âm';if($value[2] == 2)echo 'Phát Âm Từ Ngữ';if($value[2] == 3)echo 'Phát Âm Theo Câu';if($value[2] == 4)echo 'Phát Âm Theo Hình Ảnh';  ?></td>
							  <td><?php echo $value[3] ?></td>
							  <td><img style="width:100px" src="../<?php echo $value[4] ?>	"</td>
							  <td><?php echo($value[5])?></td>
							  <td><a href="edit-baihoc.php?lbh=4&id=<?php echo $value[0] ?>&lb=<?php echo $value[2]?>" class="btn btn-primary noprint">Thêm nội dung</a></td>
							  <td><a href="edit-baihoc.php?lbh=5&id=<?php echo $value[0] ?>&lb=<?php echo $value[2]?>" class="btn btn-primary noprint">Sửa nội dung</a></td>
							  <td><a href="edit-baihoc.php?lbh=6&id=<?php echo $value[0] ?>&lb=<?php echo $value[2]?>" class="btn btn-primary noprint">Xóa nội dung</a></td>
							  <td><a href="edit-baihoc.php?lbh=2&id=<?php echo $value[0] ?>" class="btn btn-primary noprint">Sửa</a></td>
							  <td><a href="edit-baihoc.php?lbh=3&id=<?php echo $value[0] ?>" class="btn btn-primary noprint">Xóa</a></td>
							</tr>  
						  <?php }
					}else{
						$result = DataProvider::GetRows("select * from baihoc");
						//echo $result; exit;
						foreach($result as $value) { ?>         
							<tr>
							  <td><?php echo $value[0] ?></td>
							  <td><?php echo $value[1]?></td>
							  <td><?php if($value[2] == 1)echo 'Phát Âm Theo Âm';if($value[2] == 2)echo 'Phát Âm Từ Ngữ';if($value[2] == 3)echo 'Phát Âm Theo Câu';if($value[2] == 4)echo 'Phát Âm Theo Hình Ảnh';  ?></td>
							  <td><?php echo $value[3] ?></td>
							  <td><img style="width:100px" src="../<?php echo $value[4] ?>	"</td>
							  <td><?php echo($value[5])?></td>
							  <td><a href="edit-baihoc.php?lbh=4&id=<?php echo $value[0] ?>&lb=<?php echo $value[2]?>" class="btn btn-primary noprint">Thêm nội dung</a></td>
							  <td><a href="edit-baihoc.php?lbh=5&id=<?php echo $value[0] ?>&lb=<?php echo $value[2]?>" class="btn btn-primary noprint">Sửa nội dung</a></td>
							  <td><a href="edit-baihoc.php?lbh=6&id=<?php echo $value[0] ?>&lb=<?php echo $value[2]?>" class="btn btn-primary noprint">Xóa nội dung</a></td>
							  <td><a href="edit-baihoc.php?lbh=2&id=<?php echo $value[0] ?>" class="btn btn-primary noprint">Sửa</a></td>
							  
							  <td><a href="edit-baihoc.php?lbh=3&id=<?php echo $value[0] ?>" class="btn btn-primary noprint">Xóa</a></td>
							</tr>  
						  <?php }
					}
				  ?>	
              </tbody>
			  
            </table>
          </div>
