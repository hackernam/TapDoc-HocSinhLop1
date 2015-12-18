<?php
	include_once '../dataconfig/dataprovider.php';
?>
 <h2 class="sub-header">Danh sách bài học:</h2>
        <a class="btn btn-success noprint" href="edit-baihoc.php?lbh=1">Add</a>
        <form action="" method="POST" class="noprint">
            
            <select name="cbTypeUser" class="btn btn-default dropdown-toggle" style="width:200px;">
            <option value="-1">All</option>
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
              <?php  $result = DataProvider::GetRows("select * from baihoc	");
					foreach($result as $value) { ?>         
                <tr>
                  <td><?php echo $value[0] ?></td>
                  <td><?php echo $value[1]?></td>
                  <td><?php if($value[2] == 1)echo 'Phát Âm Theo Âm';if($value[2] == 2)echo 'Phát Âm Từ Ngữ';if($value[2] == 3)echo 'Phát Âm Theo Câu';if($value[2] == 4)echo 'Phát Âm Theo Hình Ảnh';  ?></td>
                  <td><?php echo $value[3] ?></td>
				  <td><img style="width:100px" src="../<?php echo $value[4] ?>	"</td>
                  <td><?php echo($value[5])?></td>
                  <td><a href="edit-baihoc.php?lbh=2&id=<?php echo $value[0] ?>" class="btn btn-primary noprint">Edit</a></td>
                  <td><a href="edit-baihoc.php?lbh=3&id=<?php echo $value[0] ?>" class="btn btn-primary noprint">Delete</a></td>
                </tr>  
              <?php }?>  
              </tbody>
            </table>
          </div> 
          
          