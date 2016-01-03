            <div class="content">
            <div class="header-clear-large"></div>
            <!--Page content goes here, fixed elements go above the all elements class-->
                <div class="container heading-style-5">
                    <h4 class="heading-title">Lịch sử bài tập</h4>
                    <i class="fa fa-th heading-icon"></i>
                    <div class="line bg-black"></div>
                    <p class="heading-subtitle">
                        Danh sách các bài tập bạn đã làm.
                    </p>
                </div> 
                
                <div class="decoration"></div>
                
                <div class="thumbnail-menu">
				
					<!-- ===============================================================-->
					<?php
						include_once("dataconfig/dataprovider.php");
						
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
						
						$id = $_SESSION['UID'];
						$sqlquery = "SELECT ls.lsbt_ID, bt.bt_TieuDe, ls.lsbt_SoCauDung, ls.lsbt_DiemSo, ls.lsbt_NgayLam
									FROM lichsubaitap ls JOIN baitap bt ON ls.lsbt_BaiTap = bt.bt_ID 
									WHERE ls.lsbt_TaiKhoan = $id LIMIT $from, $max_results";
						$result = DataProvider::GetRows($sqlquery);
					?>
					<!-- ===============================================================-->                   
                </div>
				<div class="table-responsive">
					<table class="table table-hover">
					  <thead>
						<tr>
						  <th>#</th>
						  <th>Tên bài tập</th>
						  <th>Số câu đúng</th>
						  <th>Điểm số</th>
						  <th>Ngày Làm</th>
						</tr>
					  </thead>
					  <?php
							if($result != null){
								$stt = 1;
								foreach($result as $lsbt){
									$fdate = date_create_from_format('Y-m-d H:i:s', $lsbt['lsbt_NgayLam']);
									$fdate->getTimestamp();
					  ?>
					  <tbody id="myTable">
						<tr>
						  <td><?php echo $stt?></td>
						  <td><?php echo $lsbt['bt_TieuDe']?></td>
						  <td><?php echo $lsbt['lsbt_SoCauDung']?></td>
						  <td><?php echo $lsbt['lsbt_DiemSo']?></td>
						  <td><?php echo date_format($fdate, 'm/d/Y')?></td>
						</tr>
					  </tbody>
					  <?php
									$stt++;
								}
							}
					  ?>
					</table>   
				  </div>
				  <div class="col-md-12 text-center">
<ul class="pagination pagination-lg pager" ><?php
$total_results = DataProvider::NumRows("SELECT COUNT(*) as Num FROM lichsubaitap where lsbt_TaiKhoan = $id");  
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
                <div class="decoration"></div>
                
                <?php
					include_once("include/inc-footer.php");
				?>   
            <!-- End of entire page content-->
            </div> 
