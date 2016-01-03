<?php
	include_once '../dataconfig/dataprovider.php';
?>
 <h2 class="sub-header">List User</h2>
        <a class="btn btn-success noprint" href="edit-taikhoan.php?lhd=1">Add</a>
        <form action="" method="POST" class="noprint">
            <p><b>Type User: </b></p>
            <select name="cbTypeUser" class="btn btn-default dropdown-toggle" style="width:200px;">
            <option value="-1">All</option>
             <input type="submit" name="btnSubmit" class="btn btn-info" value="OK" /> 
        </form>
        <div class="">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Họ Tên</th>
                  <th>Giới Tính</th>
                  <th>Tên Tài Khoản</th>
                  <th>Loại Người Dùng</th>
                  <th>Chỉnh sửa</th>
                  <th>Khóa</th>
                </tr>
              </thead>
              <tbody>  
              <?php  
			  if(!isset($_GET['page']))
						{  
							$page = 1;  
						} 
						else 
						{  
							$page = $_GET['page'];  
						}
						$max_results = 9;
						$from = (($page * $max_results) - $max_results);
			  $result = DataProvider::GetRows("select * from taikhoan LIMIT $from, $max_results");
					foreach($result as $value) { ?>         
                <tr>
                  <td><?php echo $value[0] ?></td>
                  <td><?php echo $value[1]?></td>
                  <td><?php if($value[2] == 1)echo 'Nam'; else echo 'Nữ'; ?></td>
                  <td><?php echo $value[3] ?></td>
                  <td><?php if($value[6] == 1)echo 'Học Sinh'; else echo 'Quản Trị'; ?></td>
                  <td><a href="edit-taikhoan.php?lhd=2&id=<?php echo $value[0] ?>" class="btn btn-primary noprint">Edit</a></td>
                  <td><a href="edit-taikhoan.php?lhd=3&id=<?php echo $value[0] ?>" class="btn btn-primary noprint">Delete</a></td>
                </tr>  
              <?php }?>  
              </tbody>
            </table>
          </div> 
          
<div class="col-md-12 text-center">
<ul class="pagination pagination-lg pager" ><?php
$total_results = DataProvider::NumRows("SELECT COUNT(*) as Num FROM taikhoan");  
$total_pages = ceil($total_results / $max_results);   
for($i = 1; $i <= $total_pages; $i++){  
?>

<?php
if($i == $_GET['page'])
{
	?>
								<li class="active">
								<a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo $i; ?>" class="page_link active">
									<?php echo $i; ?>
								</a>
								</li>
								<?php
}
else{
	?>
	<li class="">
	<a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=<?php echo $i; ?>" class="">
									<?php echo $i; ?>
								</a>
								</li>
	<?php
}
?>
							
<?php
}  
?>
</ul>
</div>          